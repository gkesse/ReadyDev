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
    QString m_backgroundFlag = GConfig::Instance()->getData("BACKGROUND_FLAG");
    if(m_backgroundFlag == "FALSE") return;
    QString m_backgroundColor = GConfig::Instance()->getData("BACKGROUND_COLOR");
    QStringList m_backgroundColorMap = m_backgroundColor.split(";");
    float m_red = QString(m_backgroundColorMap[0]).toFloat()/255.0;
    float m_green = QString(m_backgroundColorMap[1]).toFloat()/255.0;
    float m_blue = QString(m_backgroundColorMap[2]).toFloat()/255.0;
    float m_alpha = QString(m_backgroundColorMap[3]).toFloat()/255.0;
    glClearColor(m_red, m_green, m_blue, m_alpha);
}
//===============================================
void GWindow::initDraw() {
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
