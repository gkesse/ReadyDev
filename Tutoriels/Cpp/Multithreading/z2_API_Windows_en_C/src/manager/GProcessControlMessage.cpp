//===============================================
#include "GProcessControlMessage.h"
//===============================================
GProcessControlMessage* GProcessControlMessage::m_instance = 0;
HINSTANCE GProcessControlMessage::m_hInstance;
//===============================================
GProcessControlMessage::GProcessControlMessage() {

}
//===============================================
GProcessControlMessage::~GProcessControlMessage() {

}
//===============================================
GProcessControlMessage* GProcessControlMessage::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessControlMessage;
    }
    return m_instance;
}
//===============================================
void GProcessControlMessage::run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {
    cout << "\n### Controle et message\n\n";
    HWND lhWnd;
    MSG lMsg;
    WNDCLASS lWndClass;

    m_hInstance = hInstance;

    lWndClass.style = 0;
    lWndClass.lpfnWndProc = WndProc;
    lWndClass.cbClsExtra = 0;
    lWndClass.cbWndExtra = 0;
    lWndClass.hInstance = hInstance;
    lWndClass.hIcon = LoadIcon(NULL, IDI_APPLICATION);
    lWndClass.hCursor = LoadCursor(NULL, IDC_ARROW);
    lWndClass.hbrBackground = (HBRUSH)(1 + COLOR_BTNFACE);
    lWndClass.lpszMenuName =  NULL;
    lWndClass.lpszClassName = TEXT("GProcessControlMessage");

    if(!RegisterClass(&lWndClass)) return;

    lhWnd = CreateWindow(TEXT("GProcessControlMessage"), TEXT("WinAPI | ReadyDev"), WS_OVERLAPPEDWINDOW, CW_USEDEFAULT, CW_USEDEFAULT, 400, 300, NULL, NULL, hInstance, NULL);

    if(!lhWnd) return;

    ShowWindow(lhWnd, nCmdShow);
    UpdateWindow(lhWnd);

    while(GetMessage(&lMsg, NULL, 0, 0)) {
        TranslateMessage(&lMsg);
        DispatchMessage(&lMsg);
    }
}
//===============================================
LRESULT CALLBACK GProcessControlMessage::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    static HWND lhEdit;

    switch(uMsg) {
    case WM_CREATE:
        lhEdit = CreateWindow(TEXT("edit"), TEXT("Texte"),
                            WS_CHILD | WS_VISIBLE | ES_MULTILINE | ES_WANTRETURN | WS_VSCROLL,
                            0, 0, 0, 0, hWnd, NULL, m_hInstance, NULL);
        return 0;

    case WM_SIZE :
        MoveWindow(lhEdit, 0, 0, LOWORD(lParam), HIWORD(lParam), TRUE);
        return 0;

    case WM_DESTROY :
        PostQuitMessage(0);
        return 0;

    default :
        return DefWindowProc(hWnd, uMsg, wParam, lParam);
    }
    return 0;
}
//===============================================
