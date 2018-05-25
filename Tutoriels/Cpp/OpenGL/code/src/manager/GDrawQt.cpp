//===============================================
#include "GDrawQt.h"
#include "GDrawQtBackground.h"
#include "GDrawQtSimple.h"
#include "GDrawQtRead.h"
#include "GDrawQtLayout.h"
#include "GDrawQtBind.h"
#include "GDrawQtEvent.h"
#include "GDrawQtCamara.h"
#include "GDrawQtUniform.h"
#include "GDrawQtUniformBlock.h"
#include "GDrawQtSubRoutine.h"
#include "GDrawQtShaderFunction.h"
#include "GDrawQtLightDiffuse.h"
#include "GDrawQtLightAds.h"
#include "GDrawQtLightTwoSide.h"
#include "GDrawQtLightTwoSideMix.h"
#include "GDrawQtLightFlat.h"
#include "GDrawQtLightSmooth.h"
#include "GDrawQtLightMultiPosition.h"
#include "GDrawQtLightDirectional.h"
#include "GDrawQtTexture.h"
#include "GDrawQtFragDiscard.h"
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
    if(m_type == "EVENT") return GDrawQtEvent::Instance();
    if(m_type == "CAMERA") return GDrawQtCamara::Instance();
    if(m_type == "UNIFORM") return GDrawQtUniform::Instance();
    if(m_type == "UNIFORM_BLOCK") return GDrawQtUniformBlock::Instance();
    if(m_type == "SUB_ROUTINE") return GDrawQtSubRoutine::Instance();
    if(m_type == "SHADER_FUNCTION") return GDrawQtShaderFunction::Instance();
    if(m_type == "LIGHT_DIFFUSE") return GDrawQtLightDiffuse::Instance();
    if(m_type == "LIGHT_ADS") return GDrawQtLightAds::Instance();
    if(m_type == "LIGHT_TWO_SIDE") return GDrawQtLightTwoSide::Instance();
    if(m_type == "LIGHT_TWO_SIDE_MIX") return GDrawQtLightTwoSideMix::Instance();
    if(m_type == "LIGHT_FLAT") return GDrawQtLightFlat::Instance();
    if(m_type == "LIGHT_SMOOTH") return GDrawQtLightSmooth::Instance();
    if(m_type == "LIGHT_MULTI_POSITION") return GDrawQtLightMultiPosition::Instance();
    if(m_type == "LIGHT_DIRECTIONAL") return GDrawQtLightDirectional::Instance();
    if(m_type == "TEXTURE") return GDrawQtTexture::Instance();
    if(m_type == "FRAG_DISCARD") return GDrawQtFragDiscard::Instance();
    return 0;
}
//===============================================
