//===============================================
#ifndef _GWindowGLFW_
#define _GWindowGLFW_
//===============================================
#include "GInclude.h"
#include "GWindow.h"
//===============================================
class GWindowGLFW : public GWindow {
public:
    GWindowGLFW();
    ~GWindowGLFW();

public:
    static GWindowGLFW* Instance();
    void show(int* argc, char** argv);
    void setBackground();
    void setCenter();

private:
    static GWindowGLFW* m_instance;
    int m_x;
    int m_y;
    int m_w;
    int m_h;
    string m_title;
    GLFWwindow* m_window;
};
//===============================================
#endif
//===============================================
