//===============================================
#include "GProcessInterprocessCommunicationClient.h"
//===============================================
GProcessInterprocessCommunicationClient* GProcessInterprocessCommunicationClient::m_instance = 0;
//===============================================
struct _tagCOMMUNICATIONOBJECT {
    HWND hWndClient;
    BOOL bExitLoop;
    LONG lSleepTimeout;
};
//===============================================
#define COMMUNICATION_OBJECT_NAME TEXT("__FILE_MAPPING__")
#define SYNCHRONIZING_MUTEX_NAME TEXT( "__TEST_MUTEX__" )
#define WINDOW_CLASS_NAME TEXT( "__TMPWNDCLASS__" )
#define BUTTON_CLOSE 100
//===============================================
HANDLE hMapping;
PCOMMUNICATIONOBJECT pCommObject;
//===============================================
GProcessInterprocessCommunicationClient::GProcessInterprocessCommunicationClient() {

}
//===============================================
GProcessInterprocessCommunicationClient::~GProcessInterprocessCommunicationClient() {

}
//===============================================
GProcessInterprocessCommunicationClient* GProcessInterprocessCommunicationClient::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessInterprocessCommunicationClient;
    }
    return m_instance;
}
//===============================================
void GProcessInterprocessCommunicationClient::run(int argc, char **argv) {
    cout << "\n### Communication inter-processus client\n\n";
    HWND hWnd = InitializeWnd();
    if(!hWnd) {
        cout << "Cannot create window!" << endl << "Error:\t" <<
                GetLastError() << endl;
        return;
    }
    HANDLE hMutex = CreateMutex(NULL, FALSE, SYNCHRONIZING_MUTEX_NAME);
    if(!hMutex) {
        cout << "Cannot create mutex!" << endl << "Error:\t" <<
                GetLastError() << endl;
        return;
    }
    hMapping = CreateFileMapping((HANDLE)-1, NULL, PAGE_READWRITE,
                                 0, sizeof(COMMUNICATIONOBJECT), COMMUNICATION_OBJECT_NAME);
    if(!hMapping) {
        cout << "Cannot create mapping object!" << endl << "Error:\t"
             << GetLastError() << endl;
        return;
    }
    pCommObject = (PCOMMUNICATIONOBJECT) MapViewOfFile(hMapping,
                                                       FILE_MAP_WRITE, 0, 0, 0);
    if(pCommObject) {
        pCommObject->bExitLoop = FALSE;
        pCommObject->hWndClient = hWnd;
        pCommObject->lSleepTimeout = 250;
        UnmapViewOfFile(pCommObject);
    }
    STARTUPINFO startupInfoRed = { 0 };
    PROCESS_INFORMATION processInformationRed = { 0 };
    STARTUPINFO startupInfoBlue = { 0 };
    PROCESS_INFORMATION processInformationBlue = { 0 };
    BOOL bSuccess = CreateProcess( TEXT("Server.exe"),
                                   TEXT("red"), NULL, NULL, FALSE, 0, NULL, NULL, &startupInfoRed,
                                   &processInformationRed);
    if(!bSuccess) {
        cout << "Cannot create process red!" << endl << "Error:\t" <<
                GetLastError() << endl;
        return;
    }
    bSuccess = CreateProcess( TEXT("Server.exe"),
                              TEXT("blue"), NULL, NULL, FALSE, 0, NULL, NULL, &startupInfoBlue,
                              &processInformationBlue);
    if(!bSuccess) {
        cout << "Cannot create process blue!" << endl << "Error:\t" <<
                GetLastError() << endl;
        return;
    }
    MSG msg = {0};
    while (GetMessage(&msg, NULL, 0, 0)) {
        TranslateMessage(&msg);
        DispatchMessage(&msg);
    }
    UnregisterClass(WINDOW_CLASS_NAME, GetModuleHandle(NULL));
    CloseHandle(hMapping);
    CloseHandle(hMutex);
    cout << "End program." << endl;
}
//===============================================
HWND GProcessInterprocessCommunicationClient::InitializeWnd() {
    WNDCLASSEX wndEx;
    wndEx.cbSize = sizeof(WNDCLASSEX);
    wndEx.style = CS_HREDRAW | CS_VREDRAW;
    wndEx.lpfnWndProc = WndProc;
    wndEx.cbClsExtra = 0;
    wndEx.cbWndExtra = 0;
    wndEx.hInstance = GetModuleHandle(NULL);
    wndEx.hbrBackground = (HBRUSH)(COLOR_WINDOW + 1);
    wndEx.lpszMenuName = NULL;
    wndEx.lpszClassName = WINDOW_CLASS_NAME;
    wndEx.hCursor = LoadCursor(NULL, IDC_ARROW);
    wndEx.hIcon = LoadIcon(NULL, IDI_APPLICATION);
    wndEx.hIconSm = LoadIcon(NULL, IDI_APPLICATION);

    if(!RegisterClassEx(&wndEx)) {
        return NULL;
    }

    HWND hWnd = CreateWindow(wndEx.lpszClassName,
                             TEXT("Interprocess communication Demo"),
                             WS_OVERLAPPEDWINDOW, 200, 200, 400, 300, NULL, NULL,
                             wndEx.hInstance, NULL);
    if (!hWnd) {
        return NULL;
    }
    HWND hButton = CreateWindow(TEXT("BUTTON"), TEXT("Close"),
                                WS_CHILD | WS_VISIBLE | BS_PUSHBUTTON | WS_TABSTOP,
                                275, 225, 100, 25, hWnd, (HMENU)BUTTON_CLOSE, wndEx.hInstance, NULL);
    HWND hStatic = CreateWindow(TEXT("STATIC"), TEXT(""), WS_CHILD |
                                WS_VISIBLE, 10, 10, 365, 205, hWnd, NULL, wndEx.hInstance, NULL);
    ShowWindow(hWnd, SW_SHOW);
    UpdateWindow(hWnd);
    return hStatic;
}
//===============================================
LRESULT CALLBACK GProcessInterprocessCommunicationClient::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    switch(uMsg) {
    case WM_COMMAND: {
        switch (LOWORD(wParam)) {
        case BUTTON_CLOSE: {
            PostMessage(hWnd, WM_CLOSE, 0, 0);
            break;
        }
        }
        break;
    }
    case WM_DESTROY: {
        pCommObject = (PCOMMUNICATIONOBJECT) MapViewOfFile(hMapping, FILE_MAP_WRITE, 0, 0, 0);
        if (pCommObject) {
            pCommObject->bExitLoop = TRUE;
            UnmapViewOfFile(pCommObject);
        }
        PostQuitMessage(0);
        break;
    }
    default: {
        return DefWindowProc(hWnd, uMsg, wParam, lParam);
    }
    }
    return 0;
}
//===============================================
