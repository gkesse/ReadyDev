//===============================================
#ifndef _GProcessOrderNotification_
#define _GProcessOrderNotification_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessOrderNotification : public GProcess {
public:
    GProcessOrderNotification();
    ~GProcessOrderNotification();

public:
    static GProcessOrderNotification* Instance();
    virtual void run(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow);
    static LRESULT CALLBACK WndProc(HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam);

private:
    static GProcessOrderNotification* m_instance;
    static HINSTANCE m_hInstance;

};
//===============================================
#endif
//===============================================
