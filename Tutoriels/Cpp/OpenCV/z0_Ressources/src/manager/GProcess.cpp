//===============================================
#include "GProcess.h"
#include "GProcessImageLoad.h"
#include "GProcessVideoPlay.h"
#include "GProcessTrackbarSlider.h"
#include "GProcessSmooth.h"
#include "GProcessHalfImage.h"
#include "GProcessEdge.h"
#include "GProcessPyramid.h"
#include "GProcessPixel.h"
#include "GProcessVideoCamera.h"
#include "GProcessVideoWrite.h"
#include "GProcessImageBlend.h"
#include "GProcessVideoCodec.h"
#include "GProcessFileStorage.h"
#include "GProcessMouse.h"
#include "GProcessOpenGL.h"
#include "GProcessQt.h"
#include "GProcessImageSplit.h"
#include "GProcessImageThreshold.h"
#include "GProcessImageEqualize.h"
#include "GProcessImageAccumulate.h"
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
    if(lProcess == "SMOOTH") return GProcessSmooth::Instance();
    if(lProcess == "HALF") return GProcessHalfImage::Instance();
    if(lProcess == "EDGE") return GProcessEdge::Instance();
    if(lProcess == "PYRAMID") return GProcessPyramid::Instance();
    if(lProcess == "PIXEL") return GProcessPixel::Instance();
    if(lProcess == "CAMERA") return GProcessVideoCamera::Instance();
    if(lProcess == "VIDEO_WRITE") return GProcessVideoWrite::Instance();
    if(lProcess == "IMAGE_BLEND") return GProcessImageBlend::Instance();
    if(lProcess == "VIDEO_CODEC") return GProcessVideoCodec::Instance();
    if(lProcess == "FILE_STORAGE") return GProcessFileStorage::Instance();
    if(lProcess == "MOUSE") return GProcessMouse::Instance();
    if(lProcess == "OPENGL") return GProcessOpenGL::Instance();
    if(lProcess == "QT") return GProcessQt::Instance();
    if(lProcess == "IMAGE_SPLIT") return GProcessImageSplit::Instance();
    if(lProcess == "IMAGE_THRESHOLD") return GProcessImageThreshold::Instance();
    if(lProcess == "IMAGE_EQUALIZE") return GProcessImageEqualize::Instance();
    if(lProcess == "IMAGE_ACCUMULATE") return GProcessImageAccumulate::Instance();
    return GProcessImageLoad::Instance();
}
//===============================================
void GProcess::run(int argc, char** argv) {}
//===============================================
