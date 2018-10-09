//===============================================
#include "GProcessResource.h"
//===============================================
GProcessResource* GProcessResource::m_instance = 0;
HINSTANCE GProcessResource::m_hInstance;
#define IDM_QUIT  1
#define IDM_NEW   2
#define IDM_ABOUT 3
//===============================================
GProcessResource::GProcessResource() {

}
//===============================================
GProcessResource::~GProcessResource() {

}
//===============================================
GProcessResource* GProcessResource::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessResource;
    }
    return m_instance;
}
//===============================================
void GProcessResource::run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {
    cout << "\n### Ressource\n\n";
    HWND lhWnd;
    MSG lMsg;
    WNDCLASS lWndClass;

    m_hInstance = hInstance;

    lWndClass.style = 0 ;
    lWndClass.lpfnWndProc = WndProc;
    lWndClass.cbClsExtra = 0;
    lWndClass.cbWndExtra = 0;
    lWndClass.hInstance = hInstance;
    lWndClass.hIcon = LoadIcon(hInstance, MAKEINTRESOURCE(1));
    lWndClass.hCursor = LoadCursor(NULL, IDC_ARROW);
    lWndClass.hbrBackground = NULL;
    lWndClass.lpszMenuName =  TEXT("LEMENU");
    lWndClass.lpszClassName = TEXT("GProcessResource");

    if(!RegisterClass(&lWndClass)) return;

    lhWnd = CreateWindow(TEXT("GProcessResource"), TEXT("Titre"), WS_OVERLAPPEDWINDOW,
                        CW_USEDEFAULT, CW_USEDEFAULT, 400, 300,
                        NULL, NULL, hInstance, NULL);
    if(!lhWnd)  return;

    ShowWindow(lhWnd, nCmdShow);

    while (GetMessage(&lMsg, NULL, 0, 0))
    {
        TranslateMessage(&lMsg);
        DispatchMessage(&lMsg);
    }
}
//===============================================
LRESULT CALLBACK GProcessResource::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    static HWND lhEdit;
    static BOOL lEditNotChg = TRUE;

    switch(uMsg) {
    case WM_CREATE: {
        HFONT hFont;
        lhEdit = CreateWindow(TEXT("edit" ), TEXT("Texte"),
                             WS_CHILD | WS_VISIBLE | ES_MULTILINE | ES_WANTRETURN | WS_VSCROLL,
                             0, 0, 0, 0, hWnd, NULL, m_hInstance, NULL);
        hFont = (HFONT)GetStockObject(ANSI_FIXED_FONT);
        SendMessage(lhEdit,WM_SETFONT,(UINT_PTR)hFont,TRUE);
        SendMessage(lhEdit, EM_SETMARGINS, EC_LEFTMARGIN | EC_RIGHTMARGIN,
                    MAKELONG(5, 5));
        return 0;
    }

    case WM_CLOSE:
        if(lEditNotChg ||
                MessageBox(hWnd,TEXT("Le texte a été modifié.\r\nEtes vous sûr de vouloir fermer l'application ?")
                           ,TEXT("Question ?"),MB_YESNO | MB_ICONQUESTION ) == IDYES)
            DestroyWindow(hWnd);
        return 0;

    case WM_COMMAND:
        if(LOWORD(wParam) == IDM_QUIT) PostMessage(hWnd, WM_CLOSE,0,0);

        if(LOWORD(wParam) == IDM_NEW)
            if(lEditNotChg ||
                    MessageBox(hWnd,TEXT("Le texte a été modifié.\r\nEtes vous sûr de vouloir fermer votre travail ?")
                               ,TEXT("Question ?"),MB_YESNO | MB_ICONQUESTION ) == IDYES) {
                SendMessage(lhEdit,WM_SETTEXT,0,0);
                lEditNotChg = TRUE;
            }

        if(LOWORD(wParam) == IDM_ABOUT)
            MessageBox(hWnd,TEXT("Mon beau programme !"),TEXT("A propos !"),MB_OK);

        if(HIWORD(wParam) == EN_CHANGE) lEditNotChg = FALSE;

        return 0;

    case WM_SIZE:
        MoveWindow(lhEdit, 0, 0, LOWORD(lParam), HIWORD(lParam), TRUE);
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
