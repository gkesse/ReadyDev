//===============================================
#include "GProcessImageRoi.h"
#include "GVision.h"
//===============================================
GProcessImageRoi* GProcessImageRoi::m_instance = 0;
//===============================================
GProcessImageRoi::GProcessImageRoi() {

}
//===============================================
GProcessImageRoi::~GProcessImageRoi() {

}
//===============================================
GProcessImageRoi* GProcessImageRoi::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageRoi;
    }
    return m_instance;
}
//===============================================
void GProcessImageRoi::run() {
    GVision::Instance()->showWindow("IMAGE");

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->getImageRoi("IMAGE", "ROI", 50, 50, 200, 200);
    GVision::Instance()->invertImage("ROI");

    GVision::Instance()->showImage("IMAGE", "IMAGE");

    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindow("IMAGE");
}
//===============================================
