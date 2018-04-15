//===============================================
#include "GWindowGLFW.h"
//===============================================
GWindowGLFW* GWindowGLFW::m_instance = 0;
//===============================================
GWindowGLFW::GWindowGLFW() {
    m_x = 0;
    m_y = 0;
    m_w = 400;
    m_h = 400;
    m_title = "OpenGL | GLFW | ReadyDev";
}
//===============================================
GWindowGLFW::~GWindowGLFW() {

}
//===============================================
GWindowGLFW* GWindowGLFW::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowGLFW;
    }
    return m_instance;
}
//===============================================
void GWindowGLFW::show(int* argc, char** argv) {
    glfwInit();
    m_window = glfwCreateWindow(m_w, m_h, m_title.c_str(), NULL, NULL);

}
//===============================================
