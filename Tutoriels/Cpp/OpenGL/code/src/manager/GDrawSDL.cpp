//===============================================
#include "GDrawSDL.h"
#include "GDrawSDLBackground.h"
#include "GDrawSDLSimple.h"
#include "GDrawSDLColor.h"
#include "GDrawSDLColorWr.h"
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
    QString lType = GConfig::Instance()->getData("DRAW_TYPE");
    if(lType == "BACKGROUND") return GDrawSDLBackground::Instance();
    if(lType == "SIMPLE") return GDrawSDLSimple::Instance();
    if(lType == "COLOR") return GDrawSDLColor::Instance();
    if(lType == "COLOR_WR") return GDrawSDLColorWr::Instance();
    return GDrawSDLBackground::Instance();
}
//===============================================
