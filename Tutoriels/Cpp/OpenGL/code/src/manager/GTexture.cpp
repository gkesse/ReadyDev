//===============================================
#include "GTexture.h"
#include "GTextureQt.h"
#include "GTextureSDL.h"
#include "GConfig.h"
//===============================================
GTexture* GTexture::m_instance = 0;
//===============================================
GTexture::GTexture() {

}
//===============================================
GTexture::~GTexture() {

}
//===============================================
GTexture* GTexture::Instance() {
    QString lType = GConfig::Instance()->getData("WINDOW_TYPE");
    //if(lType == "OPENGL_GLUT") return GDrawGLUT::Instance();
    if(lType == "OPENGL_SDL") return GTextureSDL::Instance();
    if(lType == "OPENGL_QT") return GTextureQt::Instance();
    //if(lType == "OPENGL_GLFW") return GDrawGLFW::Instance();
    return 0;
}
//===============================================
