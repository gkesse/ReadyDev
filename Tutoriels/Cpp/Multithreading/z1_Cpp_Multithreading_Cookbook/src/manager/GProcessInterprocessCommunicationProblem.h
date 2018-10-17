//===============================================
#ifndef _GProcessInterprocessCommunicationProblem_
#define _GProcessInterprocessCommunicationProblem_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _tagCOMMUNICATIONOBJECT COMMUNICATIONOBJECT, *PCOMMUNICATIONOBJECT;
//===============================================
class GProcessInterprocessCommunicationProblem : public GProcess {
public:
    GProcessInterprocessCommunicationProblem();
    ~GProcessInterprocessCommunicationProblem();

public:
    static GProcessInterprocessCommunicationProblem* Instance();
    void run2(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPTSTR lpCmdLine, int nCmdShow);
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);
    ATOM MyRegisterClass(HINSTANCE hInstance);
    HWND InitInstance(HINSTANCE hInstance, int nCmdShow);
    static int PhilosopherPass(int iPhilosopher);
    static void FillEllipse(HWND hWnd, HDC hDC, int iLeft, int iTop, int iRight, int iBottom, int iPass);

private:
    static GProcessInterprocessCommunicationProblem* m_instance;
    static PCOMMUNICATIONOBJECT pCommObject;
    TCHAR* szMappingName;
    TCHAR* szWindowClass;
    TCHAR* szTitle;
};
//===============================================
#endif
//===============================================
