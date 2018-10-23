//===============================================
#ifndef _GProcessInterprocessCommunicationSemaphoreClient_
#define _GProcessInterprocessCommunicationSemaphoreClient_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _tagCOMMUNICATIONOBJECT COMMUNICATIONOBJECT, *PCOMMUNICATIONOBJECT;
//===============================================
class GProcessInterprocessCommunicationSemaphoreClient : public GProcess {
public:
    GProcessInterprocessCommunicationSemaphoreClient();
    ~GProcessInterprocessCommunicationSemaphoreClient();

public:
    static GProcessInterprocessCommunicationSemaphoreClient* Instance();
    void run2(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow);
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);
    ATOM MyRegisterClass(HINSTANCE hInstance);
    HWND InitInstance(HINSTANCE hInstance, int nCmdShow);
    static int PhilosopherPass(int iPhilosopher);
    static void FillEllipse(HWND hWnd, HDC hDC, int iLeft, int iTop, int iRight, int iBottom, int iPass);

private:
    static GProcessInterprocessCommunicationSemaphoreClient* m_instance;
    TCHAR* m_mappingName;
    static PCOMMUNICATIONOBJECT m_commObject;
    TCHAR* m_semaphoreName;
    TCHAR* m_windowClass;
};
//===============================================
#endif
//===============================================
