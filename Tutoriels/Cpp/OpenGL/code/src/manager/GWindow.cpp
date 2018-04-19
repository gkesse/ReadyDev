//===============================================
#include "GWindow.h"
#include "GWindowSDL.h"
#include "GWindowGLUT.h"
#include "GWindowQt.h"
#include "GWindowGLFW.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
GWindow::GWindow() {

}
//===============================================
GWindow::~GWindow() {

}
//===============================================
GWindow* GWindow::Instance() {
    QString m_windowType = GConfig::Instance()->getData("WINDOW_TYPE");
    if(m_windowType == "OPENGL_GLUT") return GWindowGLUT::Instance();
    if(m_windowType == "OPENGL_SDL") return GWindowSDL::Instance();
    if(m_windowType == "OPENGL_QT") return GWindowQt::Instance();
    if(m_windowType == "OPENGL_GLFW") return GWindowGLFW::Instance();
    return 0;
}
//===============================================
void GWindow::setBackground() {
    float m_red = 5.0f/255.0f;
    float m_green = 16.0f/255.0f;
    float m_blue = 57.0f/255.0f;
    float m_alpha = 255.0f/255.0f;
    glClearColor(m_red, m_green, m_blue, m_alpha);
}
//===============================================
void GWindow::initDraw() {
    showVersion();
    QString m_drawFlag = GConfig::Instance()->getData("DRAW_FLAG");
    if(m_drawFlag == "FALSE") return;
    GDraw::Instance()->initDraw();
}
//===============================================
void GWindow::draw() {
    QString m_drawFlag = GConfig::Instance()->getData("DRAW_FLAG");
    if(m_drawFlag == "FALSE") return;
    GDraw::Instance()->draw();
}
//===============================================
void GWindow::showVersion() {
    QString m_flag = GConfig::Instance()->getData("VERSION_SHOW_FLAG");
    if(m_flag != "TRUE") return;
    GLint m_major, m_minor;
    glGetIntegerv(GL_MAJOR_VERSION, &m_major);
    glGetIntegerv(GL_MINOR_VERSION, &m_minor);
    cout << "GL_MAJOR_VERSION: " << m_major << "\n";
    cout << "GL_MINOR_VERSION: " << m_minor << "\n";
}
//===============================================
