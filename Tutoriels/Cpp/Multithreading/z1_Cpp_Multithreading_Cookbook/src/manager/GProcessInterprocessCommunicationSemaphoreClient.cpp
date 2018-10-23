//===============================================
#include "GProcessInterprocessCommunicationSemaphoreClient.h"
//===============================================
GProcessInterprocessCommunicationSemaphoreClient* GProcessInterprocessCommunicationSemaphoreClient::m_instance = 0;
//===============================================
PCOMMUNICATIONOBJECT GProcessInterprocessCommunicationSemaphoreClient::m_commObject = NULL;
//===============================================
#define BUTTON_CLOSE            100
#define PHILOSOPHER_COUNT       5
#define WM_INVALIDATE           WM_USER + 1
//===============================================
struct _tagCOMMUNICATIONOBJECT {
    HWND    hWnd;
    bool    bExitApplication;
    int     iPhilosopherArray[PHILOSOPHER_COUNT];
    int     PhilosopherCount;
};
//===============================================
GProcessInterprocessCommunicationSemaphoreClient::GProcessInterprocessCommunicationSemaphoreClient() {
    m_mappingName = TEXT("__SHARED_FILE_MAPPING__");
    m_semaphoreName = TEXT("__PD_SEMAPHORE__");
    m_windowClass = TEXT("__PD_WND_CLASS__");
}
//===============================================
GProcessInterprocessCommunicationSemaphoreClient::~GProcessInterprocessCommunicationSemaphoreClient() {

}
//===============================================
GProcessInterprocessCommunicationSemaphoreClient* GProcessInterprocessCommunicationSemaphoreClient::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessInterprocessCommunicationSemaphoreClient;
    }
    return m_instance;
}
//===============================================
void GProcessInterprocessCommunicationSemaphoreClient::run2(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {
    cout << "\n### Communication inter-processus semaphore client\n\n";
    UNREFERENCED_PARAMETER(hPrevInstance);
    UNREFERENCED_PARAMETER(lpCmdLine);

    // On cree un fichier de mappage
    HANDLE hMapping = CreateFileMapping((HANDLE) - 1, NULL, PAGE_READWRITE, 0, sizeof(COMMUNICATIONOBJECT), m_mappingName);

    if (!hMapping) {
        MessageBox(NULL, TEXT("Erreur creation fichier mappage"), TEXT("Error!"), MB_OK);
        return;
    }

    // On mappe le fichier de mappage
    m_commObject = (PCOMMUNICATIONOBJECT)MapViewOfFile(hMapping, FILE_MAP_ALL_ACCESS, 0, 0, 0);

    if (!m_commObject) {
        MessageBox(NULL, TEXT("Erreur acces fichier mappage"), TEXT("Error!"), MB_OK);
        CloseHandle(hMapping);
        return;
    }

    // On initialise les classes de fenetre
    InitCommonControls();
    MyRegisterClass(hInstance);
    HWND hWnd = NULL;

    if (!(hWnd = InitInstance(hInstance, nCmdShow))) {
        return;
    }

    m_commObject->bExitApplication = false;
    m_commObject->hWnd = hWnd;
    memset(m_commObject->iPhilosopherArray, 0, sizeof(*m_commObject->iPhilosopherArray));
    m_commObject->PhilosopherCount = PHILOSOPHER_COUNT;

    // On cree un objet semaphore
    HANDLE hSemaphore = CreateSemaphore(NULL, int(PHILOSOPHER_COUNT / 2), int(PHILOSOPHER_COUNT / 2), m_semaphoreName);

    STARTUPINFO startupInfo[PHILOSOPHER_COUNT] = { { 0 }, { 0 }, { 0 }, { 0 }, { 0 } };
    PROCESS_INFORMATION processInformation[PHILOSOPHER_COUNT] = { { 0 }, { 0 }, { 0 }, { 0 }, { 0 } };
    HANDLE hProcesses[PHILOSOPHER_COUNT];
    TCHAR szBuffer[8];

    for (int iIndex = 0; iIndex < PHILOSOPHER_COUNT; iIndex++) {
#ifdef UNICODE
        // On copie les donnees dans le buffer
        wsprintf(szBuffer, L"%d", iIndex);
#else
        // On copie les données dans le buffer
        sprintf(szBuffer, "%d", iIndex);
#endif
        // On cree un nouveau processus
        if (CreateProcess(TEXT("Server.exe"), szBuffer, NULL, NULL,
                          FALSE, 0, NULL, NULL, &startupInfo[iIndex], &processInformation[iIndex])) {
            hProcesses[iIndex] = processInformation[iIndex].hProcess;
        }
    }

    MSG msg = {0};

    // On recupere les messages
    while (GetMessage(&msg, NULL, 0, 0)) {
        // On traduit les messages
        TranslateMessage(&msg);
        // On envoie les message
        DispatchMessage(&msg);
    }

    m_commObject->bExitApplication = true;
    // On demappe le fichier mappe
    UnmapViewOfFile(m_commObject);
    // On attend la fin de tous les processus
    WaitForMultipleObjects(PHILOSOPHER_COUNT, hProcesses, TRUE, INFINITE);

    for (int iIndex = 0; iIndex < PHILOSOPHER_COUNT; iIndex++) {
        // On ferme un objet ouvert
        CloseHandle(hProcesses[iIndex]);
    }

    // On ferme un objet ouvert
    CloseHandle(hSemaphore);
    // On ferme un objet ouvert
    CloseHandle(hMapping);
}
//===============================================
LRESULT CALLBACK GProcessInterprocessCommunicationSemaphoreClient::WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam) {
    switch (uMsg) {
    case WM_COMMAND: {
        switch (LOWORD(wParam)) {
        case BUTTON_CLOSE: {
            DestroyWindow(hWnd);
            break;
        }
        }

        break;
    }

    case WM_INVALIDATE: {
        InvalidateRect(hWnd, NULL, TRUE);
        break;
    }

    case WM_PAINT: {
        PAINTSTRUCT paintStruct;
        HDC hDC = BeginPaint(hWnd, &paintStruct);
        FillEllipse(hWnd, hDC, 210, 10, 310, 110, PhilosopherPass(1));
        FillEllipse(hWnd, hDC, 410, 170, 510, 270, PhilosopherPass(2));
        FillEllipse(hWnd, hDC, 335, 400, 435, 500, PhilosopherPass(3));
        FillEllipse(hWnd, hDC, 80, 400, 180, 500, PhilosopherPass(4));
        FillEllipse(hWnd, hDC, 10, 170, 110, 270, PhilosopherPass(5));
        EndPaint(hWnd, &paintStruct);
        break;
    }

    case WM_DESTROY: {
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
ATOM GProcessInterprocessCommunicationSemaphoreClient::MyRegisterClass(HINSTANCE hInstance) {
    WNDCLASSEX wndEx;
    wndEx.cbSize = sizeof(WNDCLASSEX);
    wndEx.style = CS_HREDRAW | CS_VREDRAW;
    wndEx.lpfnWndProc = WndProc;
    wndEx.cbClsExtra = 0;
    wndEx.cbWndExtra = 0;
    wndEx.hInstance = hInstance;
    wndEx.hIcon = LoadIcon(NULL, IDI_APPLICATION);
    wndEx.hCursor = LoadCursor(NULL, IDC_ARROW);
    wndEx.hbrBackground = (HBRUSH)(COLOR_WINDOW + 1);
    wndEx.lpszMenuName = NULL;
    wndEx.lpszClassName = m_windowClass;
    wndEx.hIconSm = LoadIcon(NULL, IDI_APPLICATION);
    // On enregistre une classe de fenêtre
    return RegisterClassEx(&wndEx);
}
//===============================================
HWND GProcessInterprocessCommunicationSemaphoreClient::InitInstance(HINSTANCE hInstance, int nCmdShow) {
    // On crée la fenetre
    HWND hWnd = CreateWindow(m_windowClass, TEXT("Multithreading | ReadyDev"),
                             WS_OVERLAPPED | WS_CAPTION | WS_SYSMENU | WS_MINIMIZEBOX,
                             200, 200, 540, 590, NULL, NULL, hInstance, NULL);

    if (!hWnd) {
        return NULL;
    }

    // On crée une police
    HFONT hFont = CreateFont(14, 0, 0, 0, FW_NORMAL, FALSE, FALSE, FALSE, BALTIC_CHARSET, OUT_DEFAULT_PRECIS,
                             CLIP_DEFAULT_PRECIS, DEFAULT_QUALITY, DEFAULT_PITCH | FF_MODERN, TEXT("Microsoft Sans Serif"));

    // On crée un bouton
    HWND hButton = CreateWindow(TEXT("BUTTON"), TEXT("Close"),
                                WS_CHILD | WS_VISIBLE | BS_PUSHBUTTON | WS_TABSTOP,
                                410, 520, 100, 25, hWnd, (HMENU)BUTTON_CLOSE, hInstance, NULL);

    // On initialise la police du bouton
    SendMessage(hButton, WM_SETFONT, (WPARAM)hFont, TRUE);
    // On affiche la fenêtre
    ShowWindow(hWnd, nCmdShow);
    // On met à jour la fenêtre
    UpdateWindow(hWnd);
    return hWnd;
}
//===============================================
int GProcessInterprocessCommunicationSemaphoreClient::PhilosopherPass(int iPhilosopher) {
    return m_commObject->iPhilosopherArray[iPhilosopher - 1];
}
//===============================================
void GProcessInterprocessCommunicationSemaphoreClient::FillEllipse(HWND hWnd, HDC hDC, int iLeft, int iTop, int iRight, int iBottom, int iPass) {
    HBRUSH hBrush = NULL;

    if (iPass) {
        // On crée une brosse rouge
        hBrush = CreateSolidBrush(RGB(255, 0, 0));
    }
    else {
        // On crée une brosse blanc
        hBrush = CreateSolidBrush(RGB(255, 255, 255));
    }

    // On sélectionne la brosse
    HBRUSH hOldBrush = (HBRUSH) SelectObject(hDC, hBrush);
    Ellipse(hDC, iLeft, iTop, iRight, iBottom);
    SelectObject(hDC, hOldBrush);
    DeleteObject(hBrush);
}
//===============================================
