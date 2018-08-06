//===============================================
#include "GProcess.h"
#include "GProcessDisplayPicture.h"
#include "GProcessReadVideo.h"
#include "GConfig.h"
//===============================================
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    QString lType = GConfig::Instance()->getData("APP_NAME");
    if(lType == "DISPLAY_PICTURE") return GProcessDisplayPicture::Instance();
    if(lType == "READ_VIDEO") return GProcessReadVideo::Instance();
    return GProcessDisplayPicture::Instance();
}
//===============================================
