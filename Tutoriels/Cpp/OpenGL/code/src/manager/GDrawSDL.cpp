//===============================================
#include "GDrawSDL.h"
#include "GDrawSDLSimple.h"
#include "GDrawSDLColor.h"
#include "GConfig.h"
//===============================================
GDrawSDL* GDrawSDL::m_instance = 0;
//===============================================
GDrawSDL::GDrawSDL() {

}
//===============================================
GDrawSDL::~GDrawSDL() {

}
//===============================================
GDrawSDL* GDrawSDL::Instance() {
    QString m_type = GConfig::Instance()->getData("DRAW_TYPE");
    if(m_type == "SIMPLE") return GDrawSDLSimple::Instance();
    if(m_type == "COLOR") return GDrawSDLColor::Instance();
    return 0;
}
//===============================================
