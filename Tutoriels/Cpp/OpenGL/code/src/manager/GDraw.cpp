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
void GDraw::resize(int w, int h) {
    glViewport(0, 0, w, h);
}
//===============================================
void GDraw::initDraw() {}
void GDraw::updateCamera() {}
void GDraw::updateDraw() {}
void GDraw::draw() {}
//===============================================
