//===============================================
#include "GProcess.h"
#include "GProcessImageLoad.h"
#include "GProcessVideoPlay.h"
#include "GProcessTrackbarSlider.h"
#include "GConfig.h"
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lProcess = GConfig::Instance()->getData("PROCESS");
    if(lProcess == "IMAGE_LOAD") return GProcessImageLoad::Instance();
    if(lProcess == "VIDEO_PLAY") return GProcessVideoPlay::Instance();
    if(lProcess == "TRACKBAR_SLIDER") return GProcessTrackbarSlider::Instance();
    return GProcessImageLoad::Instance();
}
//===============================================
