//===============================================
#include "GDrawGLFW.h"
#include "GDrawGLFWBackground.h"
#include "GDrawGLFWSimple.h"
#include "GDrawGLFWPoint.h"
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
    QString lType = GConfig::Instance()->getData("DRAW_TYPE");
    if(lType == "BACKGROUND") return GDrawGLFWBackground::Instance();
    if(lType == "SIMPLE") return GDrawGLFWSimple::Instance();
    if(lType == "POINT") return GDrawGLFWPoint::Instance();
    return GDrawGLFWBackground::Instance();
}
//===============================================
