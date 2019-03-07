//===============================================
#include "GProcessDisplayPicture.h"
#include "GVision.h"
//===============================================
GProcessDisplayPicture* GProcessDisplayPicture::m_instance = 0;
//===============================================
GProcessDisplayPicture::GProcessDisplayPicture() {

}
//===============================================
GProcessDisplayPicture::~GProcessDisplayPicture() {

}
//===============================================
GProcessDisplayPicture* GProcessDisplayPicture::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDisplayPicture;
    }
    return m_instance;
}
//===============================================
void GProcessDisplayPicture::run() {
    GVision::Instance()->showWindow("IMAGE");

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->showImage("IMAGE", "IMAGE");

    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindow("IMAGE");
}
//===============================================
