//===============================================
#include "GDrawSDL.h"
#include "GDrawSDLBackground.h"
#include "GDrawSDLSimple.h"
#include "GDrawSDLColor.h"
#include "GDrawSDLMatrix.h"
#include "GDrawSDLRotate.h"
#include "GDrawSDLTranslate.h"
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
    if(lType == "MATRIX") return GDrawSDLMatrix::Instance();
    if(lType == "ROTATE") return GDrawSDLRotate::Instance();
    if(lType == "TRANSLATE") return GDrawSDLTranslate::Instance();
    return GDrawSDLBackground::Instance();
}
//===============================================
