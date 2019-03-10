//===============================================
#include "GProcessCameraUsb.h"
#include "GVision.h"
//===============================================
GProcessCameraUsb* GProcessCameraUsb::m_instance = 0;
//===============================================
GProcessCameraUsb::GProcessCameraUsb() {

}
//===============================================
GProcessCameraUsb::~GProcessCameraUsb() {

}
//===============================================
GProcessCameraUsb* GProcessCameraUsb::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessCameraUsb;
    }
    return m_instance;
}
//===============================================
void GProcessCameraUsb::run() {
    GVision::Instance()->showWindow("VIDEO");

    GVision::Instance()->loadVideo("VIDEO", 0);

    while(1) {
        GVision::Instance()->getVideoImage("VIDEO", "IMAGE");
        if(GVision::Instance()->emptyImage("IMAGE")) break;
        GVision::Instance()->showImage("IMAGE", "VIDEO");
        if(GVision::Instance()->waitKey(33) >= 0) break;
    }

    GVision::Instance()->destroyWindow("VIDEO");
}
//===============================================
