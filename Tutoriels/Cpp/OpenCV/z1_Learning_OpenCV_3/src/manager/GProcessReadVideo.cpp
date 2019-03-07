//===============================================
#include "GProcessReadVideo.h"
#include "GVision.h"
//===============================================
GProcessReadVideo* GProcessReadVideo::m_instance = 0;
//===============================================
GProcessReadVideo::GProcessReadVideo() {

}
//===============================================
GProcessReadVideo::~GProcessReadVideo() {

}
//===============================================
GProcessReadVideo* GProcessReadVideo::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessReadVideo;
    }
    return m_instance;
}
//===============================================
void GProcessReadVideo::run() {
    GVision::Instance()->showWindow("VIDEO");
    GVision::Instance()->loadVideo("VIDEO", "res/video/tree.avi");

    while(1) {
        GVision::Instance()->getVideoImage("VIDEO", "IMAGE");
        if(GVision::Instance()->emptyImage("IMAGE")) break;
        GVision::Instance()->showImage("IMAGE", "IMAGE");
        if(GVision::Instance()->waitKey(33) >= 0) break;
    }
}
//===============================================
