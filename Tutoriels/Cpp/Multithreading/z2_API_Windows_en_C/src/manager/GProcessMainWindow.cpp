//===============================================
#include "GProcessMainWindow.h"
//===============================================
GProcessMainWindow* GProcessMainWindow::m_instance = 0;
//===============================================
GProcessMainWindow::GProcessMainWindow() {

}
//===============================================
GProcessMainWindow::~GProcessMainWindow() {

}
//===============================================
GProcessMainWindow* GProcessMainWindow::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessMainWindow;
    }
    return m_instance;
}
//===============================================
void GProcessMainWindow::run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {
    cout << "\n### Fenetre principale\n\n";
    HWND lhWnd;
    MSG lMsg;
    WNDCLASS lWndClass;

    lWndClass.style = 0;
    lWndClass.lpfnWndProc = WndProc;
    lWndClass.cbClsExtra = 0;
    lWndClass.cbWndExtra = 0;
    lWndClass.hInstance = hInstance;
    lWndClass.hIcon = LoadIcon(NULL, IDI_APPLICATION);
    lWndClass.hCursor = LoadCursor(NULL, IDC_ARROW);
    lWndClass.hbrBackground = (HBRUSH)(1 + COLOR_BTNFACE);
    lWndClass.lpszMenuName =  NULL;
    lWndClass.lpszClassName = TEXT("GProcessMainWindow");

    if(!RegisterClass(&lWndClass)) return;

    lhWnd = CreateWindow(TEXT("GProcessMainWindow"), TEXT("WinAPI | ReadyDev"), WS_OVERLAPPEDWINDOW, CW_USEDEFAULT, CW_USEDEFAULT, 400, 300, NULL, NULL, hInstance, NULL);

    if(!lhWnd) return;

    ShowWindow(lhWnd, nCmdShow);
    UpdateWindow(lhWnd);

    while(GetMessage(&lMsg, NULL, 0, 0)) {
        TranslateMessage(&lMsg);
        DispatchMessage(&lMsg);
    }
}
//===============================================
LRESULT CALLBACK GProcessMainWindow::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    switch(uMsg) {
    case WM_CREATE:
        return 0;

    case WM_DESTROY:
        PostQuitMessage(0);
        return 0;

    default:
        return DefWindowProc(hWnd, uMsg, wParam, lParam);
    }
    return 0;
}
//===============================================
