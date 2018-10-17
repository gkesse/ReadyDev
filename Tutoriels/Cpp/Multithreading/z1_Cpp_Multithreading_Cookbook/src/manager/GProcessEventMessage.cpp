//===============================================
#include "GProcessEventMessage.h"
//===============================================
GProcessEventMessage* GProcessEventMessage::m_instance = 0;
//===============================================
GProcessEventMessage::GProcessEventMessage() {

}
//===============================================
GProcessEventMessage::~GProcessEventMessage() {

}
//===============================================
GProcessEventMessage* GProcessEventMessage::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessEventMessage;
    }
    return m_instance;
}
//===============================================
void GProcessEventMessage::run2(HINSTANCE hThis, HINSTANCE hPrev, LPSTR szCmdLine, int iCmdShow) {
    UNREFERENCED_PARAMETER(hPrev);
    UNREFERENCED_PARAMETER(szCmdLine);
    WNDCLASSEX wndEx = {0};
    wndEx.cbClsExtra = 0;
    wndEx.cbSize = sizeof(wndEx);
    wndEx.cbWndExtra = 0;
    wndEx.hbrBackground = (HBRUSH)(COLOR_WINDOW + 1);
    wndEx.hCursor = LoadCursor(NULL, IDC_ARROW);
    wndEx.hIcon = LoadIcon(NULL, IDI_APPLICATION);
    wndEx.hIconSm = LoadIcon(NULL, IDI_APPLICATION);
    wndEx.hInstance = hThis;
    wndEx.lpfnWndProc = WndProc;
    wndEx.lpszClassName = TEXT("GProcessEventMessage");
    wndEx.lpszMenuName = NULL;
    wndEx.style = CS_HREDRAW | CS_VREDRAW;

    if (!RegisterClassEx(&wndEx)) {
        return;
    }

    HWND hWnd = CreateWindow(wndEx.lpszClassName, TEXT("Multithreading | ReadyDev"),
                             WS_OVERLAPPEDWINDOW, 200, 200, 400, 300,
                             HWND_DESKTOP, NULL, hThis, 0);

    if (!hWnd) {
        return;
    }

    UpdateWindow(hWnd);
    ShowWindow(hWnd, iCmdShow);
    MSG msg = {0};

    while (GetMessage(&msg, NULL, NULL, NULL)) {
        TranslateMessage(&msg);
        DispatchMessage(&msg);
    }

    DestroyWindow(hWnd);
    UnregisterClass(wndEx.lpszClassName, hThis);
}
//===============================================
LRESULT CALLBACK GProcessEventMessage::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    switch (uMsg) {
    case WM_CLOSE: {
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
