//===============================================
#ifndef _GProcessControlMessage_
#define _GProcessControlMessage_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessControlMessage : public GProcess {
public:
    GProcessControlMessage();
    ~GProcessControlMessage();

public:
    static GProcessControlMessage* Instance();
    virtual void run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow);
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);

private:
    static GProcessControlMessage* m_instance;
    static HINSTANCE m_hInstance;
};
//===============================================
#endif
//===============================================
