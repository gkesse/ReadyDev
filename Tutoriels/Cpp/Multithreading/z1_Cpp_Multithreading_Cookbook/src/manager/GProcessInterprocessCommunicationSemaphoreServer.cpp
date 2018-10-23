//===============================================
#include "GProcessInterprocessCommunicationSemaphoreServer.h"
//===============================================
GProcessInterprocessCommunicationSemaphoreServer* GProcessInterprocessCommunicationSemaphoreServer::m_instance = 0;
//===============================================
#define EATING_TIME         1000
#define PHILOSOPHER_COUNT   5
#define WM_INVALIDATE WM_USER + 1
//===============================================
struct _tagCOMMUNICATIONOBJECT {
    HWND hWnd;
    bool bExitApplication;
    int iPhilosopherArray[PHILOSOPHER_COUNT];
    int PhilosopherCount;
};
//===============================================
//===============================================
GProcessInterprocessCommunicationSemaphoreServer::GProcessInterprocessCommunicationSemaphoreServer() {
    m_mappingName = TEXT("__SHARED_FILE_MAPPING__");
    m_semaphoreName = TEXT("__PD_SEMAPHORE__");
    m_exitApplication = false;
}
//===============================================
GProcessInterprocessCommunicationSemaphoreServer::~GProcessInterprocessCommunicationSemaphoreServer() {

}
//===============================================
GProcessInterprocessCommunicationSemaphoreServer* GProcessInterprocessCommunicationSemaphoreServer::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessInterprocessCommunicationSemaphoreServer;
    }
    return m_instance;
}
//===============================================
void GProcessInterprocessCommunicationSemaphoreServer::run(int argc, char **argv) {
    cout << "\n### Communication inter-processus semaphore server\n\n";
    HWND lConsole = GetConsoleWindow();
    ShowWindow(lConsole, SW_HIDE);
    int lIndex = (int)_tcstol(argv[0], NULL, 10);
    HANDLE lMapping = OpenFileMapping(FILE_MAP_ALL_ACCESS, FALSE, m_mappingName);

    while(!m_exitApplication) {
        HANDLE lSemaphore = OpenSemaphore(SEMAPHORE_ALL_ACCESS, FALSE, m_semaphoreName);
        WaitForSingleObject(lSemaphore, INFINITE);
        PCOMMUNICATIONOBJECT lCommObject = (PCOMMUNICATIONOBJECT)MapViewOfFile(lMapping, FILE_MAP_ALL_ACCESS, 0, 0, sizeof(COMMUNICATIONOBJECT));
        m_exitApplication = lCommObject->bExitApplication;

        if (!lCommObject->iPhilosopherArray[(lIndex + lCommObject->PhilosopherCount - 1) % lCommObject->PhilosopherCount] &&
                !lCommObject->iPhilosopherArray[(lIndex + 1) % lCommObject->PhilosopherCount]) {
            lCommObject->iPhilosopherArray[lIndex] = 1;
            eat();
        }

        SendMessage(lCommObject->hWnd, WM_INVALIDATE, 0, 0);
        lCommObject->iPhilosopherArray[lIndex] = 0;
        UnmapViewOfFile(lCommObject);
        ReleaseSemaphore(lSemaphore, 1, NULL);
        CloseHandle(lSemaphore);
    }

    CloseHandle(lMapping);
}
//===============================================
void GProcessInterprocessCommunicationSemaphoreServer::eat() {
    Sleep(EATING_TIME);
}
//===============================================
