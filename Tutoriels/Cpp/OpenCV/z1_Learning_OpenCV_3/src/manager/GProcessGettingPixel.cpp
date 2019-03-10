//===============================================
#include "GProcessGettingPixel.h"
#include "GVision.h"
//===============================================
GProcessGettingPixel* GProcessGettingPixel::m_instance = 0;
//===============================================
GProcessGettingPixel::GProcessGettingPixel() {

}
//===============================================
GProcessGettingPixel::~GProcessGettingPixel() {

}
//===============================================
GProcessGettingPixel* GProcessGettingPixel::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessGettingPixel;
    }
    return m_instance;
}
//===============================================
void GProcessGettingPixel::run() {
    GVision::Instance()->showWindow("IMAGE");
    GVision::Instance()->showWindow("GRAY");

    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->convertImage("IMAGE", "GRAY", cv::COLOR_BGR2GRAY);

    uchar lRed;
    uchar lGreen;
    uchar lBlue;
    uchar lColor;

    GVision::Instance()->getImagePixel("IMAGE", 50, 50, lRed, lGreen, lBlue);
    GVision::Instance()->getImagePixel("GRAY", 50, 50, lColor);

    cout << "IMAGE(50, 50): " << (int)lRed << " ; " << (int)lGreen << " ; " << (int)lBlue << "\n";
    cout << "GRAY(50, 50): " << (int)lColor << "\n";

    GVision::Instance()->showImage("IMAGE", "IMAGE");
    GVision::Instance()->showImage("GRAY", "GRAY");

    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindowAll();
}
//===============================================
