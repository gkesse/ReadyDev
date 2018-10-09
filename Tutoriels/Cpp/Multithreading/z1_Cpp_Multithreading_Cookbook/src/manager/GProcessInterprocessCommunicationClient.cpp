//===============================================
#include "GProcessInterprocessCommunicationClient.h"
//===============================================
GProcessInterprocessCommunicationClient* GProcessInterprocessCommunicationClient::m_instance = 0;
HANDLE GProcessInterprocessCommunicationClient::m_hMapping;
PCOMMUNICATIONOBJECT GProcessInterprocessCommunicationClient::m_pCommObject;
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
    HWND lhWnd = InitializeWnd();

    if(!lhWnd) {
        cout << "Erreur creation fenetre: " << GetLastError() << "\n";
        return;
    }

    HANDLE lhMutex = CreateMutex(NULL, FALSE, SYNCHRONIZING_MUTEX_NAME);

    if(!lhMutex) {
        cout << "Erreur creation mutex: " << GetLastError() << "\n";
        return;
    }

    m_hMapping = CreateFileMapping((HANDLE)-1, NULL, PAGE_READWRITE,
                                   0, sizeof(COMMUNICATIONOBJECT), COMMUNICATION_OBJECT_NAME);
    if(!m_hMapping) {
        cout << "Erreur creation mapping" << GetLastError() << "\n";
        return;
    }

    m_pCommObject = (PCOMMUNICATIONOBJECT) MapViewOfFile(m_hMapping, FILE_MAP_WRITE, 0, 0, 0);

    if(m_pCommObject) {
        m_pCommObject->bExitLoop = FALSE;
        m_pCommObject->hWndClient = lhWnd;
        m_pCommObject->lSleepTimeout = 250;
        UnmapViewOfFile(m_pCommObject);
    }

    STARTUPINFO lStartupInfoRed = {0};
    PROCESS_INFORMATION lProcessInformationRed = {0};
    STARTUPINFO lStartupInfoBlue = {0};
    PROCESS_INFORMATION lProcessInformationBlue = {0};

    BOOL lSuccess = CreateProcess(TEXT("Server.exe"),
                                  TEXT("red"), NULL, NULL, FALSE, 0, NULL, NULL, &lStartupInfoRed,
                                  &lProcessInformationRed);
    if(!lSuccess) {
        cout << "Erreur creation processus rouge" << GetLastError() << "\n";
        return;
    }

    lSuccess = CreateProcess(TEXT("Server.exe"),
                             TEXT("blue"), NULL, NULL, FALSE, 0, NULL, NULL, &lStartupInfoBlue,
                             &lProcessInformationBlue);
    if (!lSuccess) {
        cout << "Erreur creation processus bleu" << GetLastError() << "\n";
        return;
    }

    MSG lMsg = {0};

    while(GetMessage(&lMsg, NULL, 0, 0)) {
        TranslateMessage(&lMsg);
        DispatchMessage(&lMsg);
    }

    UnregisterClass(WINDOW_CLASS_NAME, GetModuleHandle(NULL));
    CloseHandle(m_hMapping);
    CloseHandle(lhMutex);
    cout << "Fin du programme" << endl;
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

    if(!RegisterClassEx(&wndEx))
    {
        return NULL;
    }
    HWND hWnd = CreateWindow(wndEx.lpszClassName,
                             TEXT("Interprocess communication Demo"),
                             WS_OVERLAPPEDWINDOW, 200, 200, 400, 300, NULL, NULL,
                             wndEx.hInstance, NULL);
    if (!hWnd)
    {
        return NULL;
    }
    HWND hButton = CreateWindow(TEXT("BUTTON"), TEXT("Close"),
                                WS_CHILD | WS_VISIBLE | BS_PUSHBUTTON | WS_TABSTOP,
                                275, 225, 100, 25, hWnd, (HMENU)BUTTON_CLOSE, wndEx.hInstance,
                                NULL);
    HWND hStatic = CreateWindow(TEXT("STATIC"), TEXT(""), WS_CHILD |
                                WS_VISIBLE, 10, 10, 365, 205, hWnd, NULL, wndEx.hInstance, NULL);
    ShowWindow(hWnd, SW_SHOW);
    UpdateWindow(hWnd);
    return hStatic;
}
//===============================================
LRESULT CALLBACK GProcessInterprocessCommunicationClient::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    switch (uMsg)
    {
    case WM_COMMAND:
    {
        switch (LOWORD(wParam))
        {
        case BUTTON_CLOSE:
        {
            PostMessage(hWnd, WM_CLOSE, 0, 0);
            break;
        }
        }
        break;
    }
    case WM_DESTROY:
    {
        m_pCommObject = (PCOMMUNICATIONOBJECT) MapViewOfFile(m_hMapping,
                                                             FILE_MAP_WRITE, 0, 0, 0);
        if (m_pCommObject)
        {
            m_pCommObject->bExitLoop = TRUE;
            UnmapViewOfFile(m_pCommObject);
        }
        PostQuitMessage(0);
        break;
    }
    default:
    {
        return DefWindowProc(hWnd, uMsg, wParam, lParam);
    }
    }
    return 0;
}
//===============================================
