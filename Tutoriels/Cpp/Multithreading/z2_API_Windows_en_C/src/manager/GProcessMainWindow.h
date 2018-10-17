//===============================================
#ifndef _GProcessMainWindow_
#define _GProcessMainWindow_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessMainWindow : public GProcess {
public:
    GProcessMainWindow();
    ~GProcessMainWindow();

public:
    static GProcessMainWindow* Instance();
    virtual void run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow);
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);

private:
    static GProcessMainWindow* m_instance;
};
//===============================================
#endif
//===============================================
