//===============================================
#include "GWindowGLFW.h"
#include "GDraw.h"
#include "GConfig.h"
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
    glfwMakeContextCurrent(m_window);
    showVersion();
    while(!glfwWindowShouldClose(m_window)) {
        setBackground();
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
        GDraw::Instance()->updateCamera();
        GDraw::Instance()->updateDraw();
        GDraw::Instance()->draw();
        glfwSwapBuffers(m_window);
        glfwPollEvents();
    }

    glfwDestroyWindow(m_window);
    glfwTerminate();
}
//===============================================
GLFWwindow* GWindowGLFW::getWindowGLFW() {
    return m_window;
}
//===============================================
void GWindowGLFW::setCenter() {
}
//===============================================
