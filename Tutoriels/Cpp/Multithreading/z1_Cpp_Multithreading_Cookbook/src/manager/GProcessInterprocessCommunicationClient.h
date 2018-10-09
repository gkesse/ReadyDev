//===============================================
#ifndef _GProcessInterprocessCommunicationClient_
#define _GProcessInterprocessCommunicationClient_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _tagCOMMUNICATIONOBJECT COMMUNICATIONOBJECT, *PCOMMUNICATIONOBJECT;
//===============================================
class GProcessInterprocessCommunicationClient : public GProcess {
public:
    GProcessInterprocessCommunicationClient();
    ~GProcessInterprocessCommunicationClient();

public:
    static GProcessInterprocessCommunicationClient* Instance();
    void run(int argc = 0, char** argv = 0);
    HWND InitializeWnd();
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);

private:
    static GProcessInterprocessCommunicationClient* m_instance;
};
//===============================================
#endif
//===============================================
