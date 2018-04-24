//===============================================
#include "GDraw.h"
#include "GDrawSDL.h"
#include "GDrawGLUT.h"
#include "GDrawQt.h"
#include "GDrawGLFW.h"
#include "GConfig.h"
//===============================================
GDraw* GDraw::m_instance = 0;
//===============================================
GDraw::GDraw() {

}
//===============================================
GDraw::~GDraw() {

}
//===============================================
GDraw* GDraw::Instance() {
    QString lType = GConfig::Instance()->getData("WINDOW_TYPE");
    if(lType == "OPENGL_GLUT") return GDrawGLUT::Instance();
    if(lType == "OPENGL_SDL") return GDrawSDL::Instance();
    if(lType == "OPENGL_QT") return GDrawQt::Instance();
    if(lType == "OPENGL_GLFW") return GDrawGLFW::Instance();
    return 0;
}
//===============================================
void GDraw::setAntiAliasing() {
    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
}
//===============================================
void GDraw::initDraw() {}
void GDraw::updateCamera(int width, int height) {}
void GDraw::updateDraw() {}
void GDraw::draw() {}
//===============================================
