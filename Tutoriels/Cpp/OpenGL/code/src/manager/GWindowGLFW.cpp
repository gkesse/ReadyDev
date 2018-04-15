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
    glfwInit();
    m_window = glfwCreateWindow(m_w, m_h, m_title.c_str(), NULL, NULL);
    glfwMakeContextCurrent(m_window);
    glewInit();
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
    QString m_backgroundFlag = GConfig::Instance()->getData("BACKGROUND_FLAG");
    if(m_backgroundFlag == "FALSE") return;
    QString m_backgroundColor = GConfig::Instance()->getData("BACKGROUND_COLOR");
    QStringList m_backgroundColorMap = m_backgroundColor.split(";");
    float m_red = QString(m_backgroundColorMap[0]).toFloat()/255.0;
    float m_green = QString(m_backgroundColorMap[1]).toFloat()/255.0;
    float m_blue = QString(m_backgroundColorMap[2]).toFloat()/255.0;
    float m_alpha = QString(m_backgroundColorMap[3]).toFloat()/255.0;
    static const float m_backgroundColorVal[] = {m_red, m_green, m_blue, m_alpha};
    glClearBufferfv(GL_COLOR, 0, m_backgroundColorVal);
}
//===============================================
