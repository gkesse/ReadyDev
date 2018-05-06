//===============================================
#include "GDrawQt.h"
#include "GDrawQtBackground.h"
#include "GDrawQtSimple.h"
#include "GDrawQtRead.h"
#include "GDrawQtLayout.h"
#include "GDrawQtBind.h"
#include "GDrawQtUniform.h"
#include "GDrawQtUniformBlock.h"
#include "GDrawQtLightDiffuse.h"
#include "GDrawQtLightAds.h"
#include "GDrawQtLightTwoSided.h"
#include "GDrawQtLightFlat.h"
#include "GDrawQtTexture.h"
#include "GConfig.h"
//===============================================
GDrawQt* GDrawQt::m_instance = 0;
//===============================================
GDrawQt::GDrawQt() {

}
//===============================================
GDrawQt::~GDrawQt() {

}
//===============================================
GDrawQt* GDrawQt::Instance() {
    QString m_type = GConfig::Instance()->getData("DRAW_TYPE");
    if(m_type == "BACKGROUND") return GDrawQtBackground::Instance();
    if(m_type == "SIMPLE") return GDrawQtSimple::Instance();
    if(m_type == "READ") return GDrawQtRead::Instance();
    if(m_type == "LAYOUT") return GDrawQtLayout::Instance();
    if(m_type == "BIND") return GDrawQtBind::Instance();
    if(m_type == "UNIFORM") return GDrawQtUniform::Instance();
    if(m_type == "UNIFORM_BLOCK") return GDrawQtUniformBlock::Instance();
    if(m_type == "LIGHT_DIFFUSE") return GDrawQtLightDiffuse::Instance();
    if(m_type == "LIGHT_ADS") return GDrawQtLightAds::Instance();
    if(m_type == "LIGHT_TWO_SIDED") return GDrawQtLightTwoSided::Instance();
    if(m_type == "LIGHT_FLAT") return GDrawQtLightFlat::Instance();
    if(m_type == "TEXTURE") return GDrawQtTexture::Instance();
    return 0;
}
//===============================================
