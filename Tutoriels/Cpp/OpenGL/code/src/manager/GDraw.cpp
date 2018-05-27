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
    return GDrawSDL::Instance();
}
//===============================================
void GDraw::setAntiAliasing() {
    glEnable(GL_LINE_SMOOTH);
    glHint(GL_LINE_SMOOTH_HINT, GL_NICEST);

    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);

    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);
}
//===============================================
void GDraw::drawLine(GVertexInfo v1, GVertexInfo v2, float width) {
    setAntiAliasing();
    glLineWidth(width);
    glBegin(GL_LINES);
    glColor4f(v1.r, v1.g, v1.b, v1.a);
    glVertex3f(v1.x, v1.y, v1.z);
    glColor4f(v2.r, v2.g, v2.b, v2.a);
    glVertex3f(v2.x, v2.y, v2.z);
    glEnd();
}
//===============================================
void GDraw::initDraw() {}
void GDraw::initCamera(int width, int height) {}
void GDraw::updateCamera(int width, int height) {}
void GDraw::updateDraw() {}
void GDraw::draw() {}
//===============================================
void GDraw::handleEvents(SDL_Event* event) {}
void GDraw::onKeyDown(SDL_Event* event) {}
void GDraw::onMouseMotion(SDL_Event* event) {}
void GDraw::onMouseButtonDown(SDL_Event* event) {}
void GDraw::onMouseWheel(SDL_Event* event) {}
//===============================================
void GDraw::onKeyPress(QKeyEvent* event) {}
//===============================================
