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
    glutInit(argc, argv);
    glfwInit();
    m_window = glfwCreateWindow(m_w, m_h, m_title.c_str(), NULL, NULL);
    glfwMakeContextCurrent(m_window);
    setCenter();
    showVersion();
    setBackground();
    GDraw::Instance()->initDraw();
    while(!glfwWindowShouldClose(m_window)) {
        int lWidth, lHeight;
        glfwGetFramebufferSize(m_window, &lWidth, &lHeight);
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
        GDraw::Instance()->updateCamera(lWidth, lHeight);
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
    int lScreenW = glutGet(GLUT_SCREEN_WIDTH);
    int lScreenH = glutGet(GLUT_SCREEN_HEIGHT);
    m_x = (lScreenW - m_w)/2;
    m_y = (lScreenH - m_h)/2;
    glfwSetWindowPos(m_window, m_x, m_y);
}
//===============================================