//===============================================
#include "GProcessInterprocessCommunicationServer.h"
//===============================================
GProcessInterprocessCommunicationServer* GProcessInterprocessCommunicationServer::m_instance = 0;
//===============================================
#define COMMUNICATION_OBJECT_NAME TEXT("__FILE_MAPPING__")
#define SYNCHRONIZING_MUTEX_NAME TEXT("__TEST_MUTEX__")
//===============================================
struct _tagCOMMUNICATIONOBJECT {
    HWND hWndClient;
    BOOL bExitLoop;
    LONG lSleepTimeout;
};
//===============================================
GProcessInterprocessCommunicationServer::GProcessInterprocessCommunicationServer() {

}
//===============================================
GProcessInterprocessCommunicationServer::~GProcessInterprocessCommunicationServer() {

}
//===============================================
GProcessInterprocessCommunicationServer* GProcessInterprocessCommunicationServer::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessInterprocessCommunicationServer;
    }
    return m_instance;
}
//===============================================
void GProcessInterprocessCommunicationServer::run(int argc, char **argv) {
    cout << "\n### Communication inter-processus server\n\n";
    HBRUSH lHBrush = NULL;

    if(_tcscmp((char*)TEXT("blue"), argv[0]) == 0) {
        lHBrush = CreateSolidBrush(RGB(0, 0, 255));
    }
    else {
        lHBrush = CreateSolidBrush(RGB(255, 0, 0));
    }

    HWND lHWnd = NULL;
    HDC lHDC = NULL;
    RECT lRectClient = {0};
    LONG lWaitTimeout = 0;
    HANDLE lHMapping = NULL;
    PCOMMUNICATIONOBJECT lCommObject = NULL;
    BOOL lContinueLoop = TRUE;
    HANDLE lHMutex = OpenMutex(MUTEX_ALL_ACCESS, FALSE, SYNCHRONIZING_MUTEX_NAME);
    lHMapping = OpenFileMapping(FILE_MAP_READ, FALSE, COMMUNICATION_OBJECT_NAME);

    if(lHMapping) {
        while(lContinueLoop) {
            WaitForSingleObject(lHMutex, INFINITE);
            lCommObject = (PCOMMUNICATIONOBJECT)MapViewOfFile(lHMapping, FILE_MAP_READ, 0, 0, sizeof(COMMUNICATIONOBJECT));
            if(lCommObject) {
                lContinueLoop = !lCommObject->bExitLoop;
                lHWnd = lCommObject->hWndClient;
                lWaitTimeout = lCommObject->lSleepTimeout;
                UnmapViewOfFile(lCommObject);
                lHDC = GetDC(lHWnd);

                if (GetClientRect(lHWnd, &lRectClient)) {
                    FillRect(lHDC, &lRectClient, lHBrush);
                }
                ReleaseDC(lHWnd, lHDC);
                Sleep(lWaitTimeout);
            }
            ReleaseMutex(lHMutex);
        }
    }

    CloseHandle(lHMapping);
    CloseHandle(lHMutex);
    DeleteObject(lHBrush);
}
//===============================================
