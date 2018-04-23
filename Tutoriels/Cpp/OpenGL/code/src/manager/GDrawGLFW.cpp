//===============================================
#include "GDrawGLFW.h"
#include "GDrawGLFWBackground.h"
#include "GConfig.h"
//===============================================
GDrawGLFW* GDrawGLFW::m_instance = 0;
//===============================================
GDrawGLFW::GDrawGLFW() {

}
//===============================================
GDrawGLFW::~GDrawGLFW() {

}
//===============================================
GDrawGLFW* GDrawGLFW::Instance() {
    QString m_type = GConfig::Instance()->getData("DRAW_TYPE");
    if(m_type == "BACKGROUND") return GDrawGLFWBackground::Instance();
    return 0;
}
//===============================================
