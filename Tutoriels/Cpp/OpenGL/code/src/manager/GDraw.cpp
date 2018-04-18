//===============================================
#include "GDraw.h"
#include "GDrawSDL.h"
#include "GDrawGLUT.h"
#include "GDrawQt.h"
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
    QString m_type = GConfig::Instance()->getData("WINDOW_TYPE");
    if(m_type == "OPENGL_GLUT") return GDrawGLUT::Instance();
    if(m_type == "OPENGL_SDL") return GDrawSDL::Instance();
    if(m_type == "OPENGL_QT") return GDrawQt::Instance();
    return 0;
}
//===============================================
