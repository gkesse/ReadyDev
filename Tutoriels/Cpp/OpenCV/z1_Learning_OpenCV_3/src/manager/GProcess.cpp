//===============================================
#include "GProcess.h"
#include "GProcessDisplayPicture.h"
#include "GProcessReadVideo.h"
#include "GProcessTrackbarSlider.h"
#include "GProcessSmoothingImage.h"
#include "GProcessImagePyramid.h"
#include "GProcessCannyEdge.h"
#include "GProcessGettingPixel.h"
#include "GProcessSettingPixel.h"
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
    QString lAppName = GConfig::Instance()->getData("APP_NAME");
    if(lAppName == "DISPLAY_PICTURE") return GProcessDisplayPicture::Instance();
    if(lAppName == "READ_VIDEO") return GProcessReadVideo::Instance();
    if(lAppName == "TRACKBAR_SLIDER") return GProcessTrackbarSlider::Instance();
    if(lAppName == "SMOOTHING_IMAGE") return GProcessSmoothingImage::Instance();
    if(lAppName == "IMAGE_PYRAMID") return GProcessImagePyramid::Instance();
    if(lAppName == "CANNY_EDGE") return GProcessCannyEdge::Instance();
    if(lAppName == "GETTING_PIXEL") return GProcessGettingPixel::Instance();
    if(lAppName == "SETTING_PIXEL") return GProcessSettingPixel::Instance();
    return GProcessDisplayPicture::Instance();
}
//===============================================
