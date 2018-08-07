//===============================================
#include "GProcess.h"
#include "GProcessDisplayPicture.h"
#include "GProcessReadVideo.h"
#include "GProcessTrackbarSlider.h"
#include "GProcessSmoothingImage.h"
#include "GProcessImagePyramid.h"
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
    if(lType == "TRACKBAR_SLIDER") return GProcessTrackbarSlider::Instance();
    if(lType == "SMOOTHING_IMAGE") return GProcessSmoothingImage::Instance();
    if(lType == "IMAGE_PYRAMID") return GProcessImagePyramid::Instance();
    return GProcessDisplayPicture::Instance();
}
//===============================================
