//===============================================
#include "GWindowGLFW.h"
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
    glfwWindowHint(GLFW_CONTEXT_VERSION_MAJOR, 4);
    glfwWindowHint(GLFW_CONTEXT_VERSION_MINOR, 3);
    glfwWindowHint(GLFW_OPENGL_FORWARD_COMPAT, true);
    glfwWindowHint(GLFW_OPENGL_PROFILE, GLFW_OPENGL_CORE_PROFILE);
    glfwWindowHint(GLFW_RESIZABLE, false);
    glfwWindowHint(GLFW_OPENGL_DEBUG_CONTEXT, true);
    m_window = glfwCreateWindow(m_w, m_h, m_title.c_str(), NULL, NULL);
    glfwMakeContextCurrent(m_window);
    glewInit();
    setCenter();
    while(1) {
        if(glfwWindowShouldClose(m_window)) break;
        setBackground();
        glfwSwapBuffers(m_window);
        glfwPollEvents();
    }
    glfwDestroyWindow(m_window);
    glfwTerminate();
}
//===============================================
void GWindowGLFW::setBackground() {
    float m_red = 5.0f/255.0f;
    float m_green = 16.0f/255.0f;
    float m_blue = 57.0f/255.0f;
    float m_alpha = 255.0f/255.0f;
    static const float m_backgroundColorVal[] = {m_red, m_green, m_blue, m_alpha};
    glClearBufferfv(GL_COLOR, 0, m_backgroundColorVal);
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
