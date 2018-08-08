//===============================================
#include "GProcessCameraUsb.h"
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
    cv::namedWindow("Camera USB | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::VideoCapture lCap;
    lCap.open(0);
    if(!lCap.isOpened()) return;
    cv::Mat lFrame;

    while(1) {
        lCap >> lFrame;
        if(lFrame.empty()) break;
        cv::imshow("Camera USB | ReadyDev", lFrame);
        if(cv::waitKey(33) >= 0) break;
    }
}
//===============================================
