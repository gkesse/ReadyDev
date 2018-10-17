//===============================================
#ifndef _GProcessResource_
#define _GProcessResource_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessResource : public GProcess {
public:
    GProcessResource();
    ~GProcessResource();

public:
    static GProcessResource* Instance();
    virtual void run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow);
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);

private:
    static GProcessResource* m_instance;
    static HINSTANCE m_hInstance;
};
//===============================================
#endif
//===============================================
