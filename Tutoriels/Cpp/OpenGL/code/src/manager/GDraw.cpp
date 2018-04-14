//===============================================
#include "GDraw.h"
#include "GDrawSDL.h"
#include "GDrawGLUT.h"
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
    QString m_windowType = GConfig::Instance()->getData("WINDOW_TYPE");
    if(m_windowType == "OPENGL_GLUT") return GDrawGLUT::Instance();
    if(m_windowType == "OPENGL_SDL_GLEW") return GDrawSDL::Instance();
    return 0;
}
//===============================================
