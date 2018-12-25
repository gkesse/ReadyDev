//===============================================
#include "GProcessVideoPlay.h"
#include "GVideo.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
//===============================================
GProcessVideoPlay* GProcessVideoPlay::m_instance = 0;
//===============================================
GProcessVideoPlay::GProcessVideoPlay() {

}
//===============================================
GProcessVideoPlay::~GProcessVideoPlay() {

}
//===============================================
GProcessVideoPlay* GProcessVideoPlay::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessVideoPlay;
    }
    return m_instance;
}
//===============================================
void GProcessVideoPlay::run(int argc, char** argv) {
    cv::VideoCapture lCap;
    cv::Mat lImg;
    char lChar;

    GVideo::Instance()->load("res/video/tree.avi", lCap);
    GWindow::Instance()->create("OpenCV | ReadyDev");

    while(1) {
        GVideo::Instance()->image(lCap, lImg);
        if(lImg.empty()) break;
        GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
        GDelay::Instance()->delay(33, lChar);
        if(lChar >= 0) break;
    }

    GWindow::Instance()->destroy("OpenCV | ReadyDev");
}
//===============================================
