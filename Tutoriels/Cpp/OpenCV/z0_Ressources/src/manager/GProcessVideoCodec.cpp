//===============================================
#include "GProcessVideoCodec.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GVideo.h"
#include "GPrint.h"
//===============================================
GProcessVideoCodec* GProcessVideoCodec::m_instance = 0;
//===============================================
GProcessVideoCodec::GProcessVideoCodec() {

}
//===============================================
GProcessVideoCodec::~GProcessVideoCodec() {

}
//===============================================
GProcessVideoCodec* GProcessVideoCodec::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessVideoCodec;
    }
    return m_instance;
}
//===============================================
void GProcessVideoCodec::run(int argc, char** argv) {
    cv::VideoCapture lCap;
    cv::Mat lImg;
    char lChar;
    char lFourcc[5];

    GVideo::Instance()->load("res/video/tree.avi", lCap);
    GWindow::Instance()->create("OpenCV | ReadyDev");

    GVideo::Instance()->codec(lCap, lFourcc);
    GPrint::Instance()->print(lFourcc, "FOURCC");

    while(1) {
        GVideo::Instance()->image(lCap, lImg);
        if(lImg.empty()) break;
        GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
        GDelay::Instance()->delay(33, lChar);
        if(lChar >= 0) break;
    }

    GWindow::Instance()->destroy("OpenCV | ReadyDev");
    GVideo::Instance()->relase(lCap);
}
//===============================================
