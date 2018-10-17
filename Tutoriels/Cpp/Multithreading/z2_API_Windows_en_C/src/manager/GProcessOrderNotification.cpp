//===============================================
#include "GProcessOrderNotification.h"
//===============================================
GProcessOrderNotification* GProcessOrderNotification::m_instance = 0;
HINSTANCE GProcessOrderNotification::m_hInstance;
#define IDM_QUIT 1
//===============================================
GProcessOrderNotification::GProcessOrderNotification() {

}
//===============================================
GProcessOrderNotification::~GProcessOrderNotification() {

}
//===============================================
GProcessOrderNotification* GProcessOrderNotification::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessOrderNotification;
    }
    return m_instance;
}
//===============================================
void GProcessOrderNotification::run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {
    cout << "\n### Commandes et notifications\n\n";
    HWND hWnd;
    MSG msg;
    WNDCLASS wc;
    HMENU hMenu, hSousMenu;

    m_hInstance = hInstance;

    wc.style = 0 ;
    wc.lpfnWndProc = WndProc;
    wc.cbClsExtra = 0;
    wc.cbWndExtra = 0;
    wc.hInstance = hInstance;
    wc.hIcon = NULL;
    wc.hCursor = LoadCursor(NULL, IDC_ARROW);
    wc.hbrBackground = NULL;
    wc.lpszMenuName =  NULL;
    wc.lpszClassName = TEXT("GProcessOrderNotification");


    if(!RegisterClass(&wc)) return;


    hSousMenu = CreateMenu();
    AppendMenu(hSousMenu, MF_STRING, IDM_QUIT, TEXT("Quitter"));
    hMenu = CreateMenu();
    AppendMenu(hMenu, MF_POPUP, (UINT_PTR)hSousMenu, TEXT("Fichier"));


    hWnd = CreateWindow(TEXT("GProcessOrderNotification"), TEXT("WinAPI | ReadyDev"), WS_OVERLAPPEDWINDOW,
                        CW_USEDEFAULT, CW_USEDEFAULT, 400, 300,
                        NULL, hMenu, hInstance, NULL);
    if(!hWnd)  return;

    ShowWindow(hWnd, nCmdShow);

    while (GetMessage(&msg, NULL, 0, 0))
    {
        TranslateMessage(&msg);
        DispatchMessage(&msg);
    }
}
//===============================================
LRESULT CALLBACK GProcessOrderNotification::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    static HWND hEdit;
    static BOOL EditNotChg = TRUE;


    switch (uMsg)
    {
    case WM_CREATE:
    {
        HFONT hFont;
        hEdit = CreateWindow(TEXT("edit"), TEXT("Texte"),
                             WS_CHILD | WS_VISIBLE | ES_MULTILINE | ES_WANTRETURN | WS_VSCROLL,
                             0, 0, 0, 0, hWnd, NULL, m_hInstance, NULL);
        hFont = (HFONT)GetStockObject(ANSI_FIXED_FONT);
        SendMessage(hEdit,WM_SETFONT,(UINT_PTR)hFont,TRUE);
        SendMessage(hEdit, EM_SETMARGINS, EC_LEFTMARGIN | EC_RIGHTMARGIN, MAKELONG(5, 5));
        return 0;
    }


    case WM_CLOSE :
        if(EditNotChg ||
                MessageBox(hWnd,TEXT("Le texte a été modifié.\r\nÊtes-vous sûr de vouloir fermer l'application ?")
                           ,TEXT("Question ?"),MB_YESNO | MB_ICONQUESTION ) == IDYES)
            DestroyWindow(hWnd);
        return 0;


    case WM_COMMAND :
        if(LOWORD(wParam) == IDM_QUIT) PostMessage(hWnd, WM_CLOSE,0,0);
        if(HIWORD(wParam) == EN_CHANGE) EditNotChg = FALSE;
        return 0;


    case WM_SIZE :
        MoveWindow(hEdit, 0, 0, LOWORD(lParam), HIWORD(lParam), TRUE);
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
