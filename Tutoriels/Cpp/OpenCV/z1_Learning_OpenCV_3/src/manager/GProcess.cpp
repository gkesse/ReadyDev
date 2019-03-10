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
#include "GProcessCameraUsb.h"
#include "GProcessWritingVideo.h"
#include "GProcessImageRoi.h"
#include "GProcessFileStorage.h"
#include "GProcessMouseCallback.h"
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
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "DISPLAY_PICTURE") return GProcessDisplayPicture::Instance();
    if(lKey == "READ_VIDEO") return GProcessReadVideo::Instance();
    if(lKey == "TRACKBAR_SLIDER") return GProcessTrackbarSlider::Instance();
    if(lKey == "SMOOTHING_IMAGE") return GProcessSmoothingImage::Instance();
    if(lKey == "IMAGE_PYRAMID") return GProcessImagePyramid::Instance();
    if(lKey == "CANNY_EDGE") return GProcessCannyEdge::Instance();
    if(lKey == "GETTING_PIXEL") return GProcessGettingPixel::Instance();
    if(lKey == "SETTING_PIXEL") return GProcessSettingPixel::Instance();
    if(lKey == "CAMERA_USB") return GProcessCameraUsb::Instance();
    if(lKey == "WRITING_VIDEO") return GProcessWritingVideo::Instance();
    if(lKey == "IMAGE_ROI") return GProcessImageRoi::Instance();
    if(lKey == "FILE_STORAGE") return GProcessFileStorage::Instance();
    if(lKey == "MOUSE_CALLBACK") return GProcessMouseCallback::Instance();
    return GProcessDisplayPicture::Instance();
}
//===============================================
