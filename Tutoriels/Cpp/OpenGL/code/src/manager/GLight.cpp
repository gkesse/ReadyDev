//================================================
#include "GLight.h"
#include "GLightDiffuse.h"
#include "GLightAds.h"
#include "GConfig.h"
//================================================
GLight* GLight::m_instance = 0;
//================================================
GLight::GLight() {

}
//================================================
GLight::~GLight() {
	
}
//================================================
GLight* GLight::Instance() {
    QString lType = GConfig::Instance()->getData("LIGHT_TYPE");
    if(lType == "LIGHT_DIFFUSE") return GLightDiffuse::Instance();
    if(lType == "LIGHT_ADS") return GLightAds::Instance();
    return GLightDiffuse::Instance();
}
//================================================
