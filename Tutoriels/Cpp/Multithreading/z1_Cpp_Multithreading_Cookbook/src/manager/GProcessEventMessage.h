//===============================================
#ifndef _GProcessEventMessage_
#define _GProcessEventMessage_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessEventMessage : public GProcess {
public:
    GProcessEventMessage();
    ~GProcessEventMessage();

public:
    static GProcessEventMessage* Instance();
    void run2(HINSTANCE hThis, HINSTANCE hPrev, LPSTR szCmdLine, int iCmdShow);
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);

private:
    static GProcessEventMessage* m_instance;
};
//===============================================
#endif
//===============================================
