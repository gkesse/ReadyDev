//===============================================
#include "GProcessSmoothingImage.h"
#include "GVision.h"
//===============================================
GProcessSmoothingImage* GProcessSmoothingImage::m_instance = 0;
//===============================================
GProcessSmoothingImage::GProcessSmoothingImage() {

}
//===============================================
GProcessSmoothingImage::~GProcessSmoothingImage() {

}
//===============================================
GProcessSmoothingImage* GProcessSmoothingImage::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSmoothingImage;
    }
    return m_instance;
}
//===============================================
void GProcessSmoothingImage::run() {
    GVision::Instance()->showWindow("IMAGE");
    GVision::Instance()->showWindow("SMOOTH");

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->copyImage("IMAGE", "SMOOTH");

    GVision::Instance()->smoothImage("SMOOTH", "SMOOTH");
    GVision::Instance()->smoothImage("SMOOTH", "SMOOTH");
    GVision::Instance()->smoothImage("SMOOTH", "SMOOTH");

    GVision::Instance()->showImage("IMAGE", "IMAGE");
    GVision::Instance()->showImage("SMOOTH", "SMOOTH");

    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindowAll();
}
//===============================================
