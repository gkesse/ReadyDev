//===============================================
#include "GProcessCannyEdge.h"
#include "GVision.h"
//===============================================
GProcessCannyEdge* GProcessCannyEdge::m_instance = 0;
//===============================================
GProcessCannyEdge::GProcessCannyEdge() {

}
//===============================================
GProcessCannyEdge::~GProcessCannyEdge() {

}
//===============================================
GProcessCannyEdge* GProcessCannyEdge::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessCannyEdge;
    }
    return m_instance;
}
//===============================================
void GProcessCannyEdge::run() {
    GVision::Instance()->showWindow("IMAGE");
    GVision::Instance()->showWindow("GRAY");
    GVision::Instance()->showWindow("CANNY");

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->convertImage("IMAGE", "GRAY", cv::COLOR_BGR2GRAY);
    GVision::Instance()->cannyImage("GRAY", "CANNY");

    GVision::Instance()->showImage("IMAGE", "IMAGE");
    GVision::Instance()->showImage("GRAY", "GRAY");
    GVision::Instance()->showImage("CANNY", "CANNY");

    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindowAll();
}
//===============================================
