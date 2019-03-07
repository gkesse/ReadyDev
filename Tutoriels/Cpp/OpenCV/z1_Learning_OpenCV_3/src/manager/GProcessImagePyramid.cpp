//===============================================
#include "GProcessImagePyramid.h"
#include "GVision.h"
//===============================================
GProcessImagePyramid* GProcessImagePyramid::m_instance = 0;
//===============================================
GProcessImagePyramid::GProcessImagePyramid() {

}
//===============================================
GProcessImagePyramid::~GProcessImagePyramid() {

}
//===============================================
GProcessImagePyramid* GProcessImagePyramid::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImagePyramid;
    }
    return m_instance;
}
//===============================================
void GProcessImagePyramid::run() {
    GVision::Instance()->showWindow("IMAGE");
    GVision::Instance()->showWindow("PYRAMID_1");
    GVision::Instance()->showWindow("PYRAMID_2");

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->pyramidImage("IMAGE", "PYRAMID_1");
    GVision::Instance()->pyramidImage("PYRAMID_1", "PYRAMID_2");

    GVision::Instance()->showImage("IMAGE", "IMAGE");
    GVision::Instance()->showImage("PYRAMID_1", "PYRAMID_1");
    GVision::Instance()->showImage("PYRAMID_2", "PYRAMID_2");

    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindowAll();
}
//===============================================
