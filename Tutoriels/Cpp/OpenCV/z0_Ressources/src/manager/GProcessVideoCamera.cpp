//===============================================
#include "GProcessVideoCamera.h"
#include "GVideo.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
//===============================================
GProcessVideoCamera* GProcessVideoCamera::m_instance = 0;
//===============================================
GProcessVideoCamera::GProcessVideoCamera() {

}
//===============================================
GProcessVideoCamera::~GProcessVideoCamera() {

}
//===============================================
GProcessVideoCamera* GProcessVideoCamera::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessVideoCamera;
    }
    return m_instance;
}
//===============================================
void GProcessVideoCamera::run(int argc, char** argv) {
    cv::VideoCapture lCap;
    cv::Mat lImg;
    char lChar;

    GVideo::Instance()->open(0, lCap);
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
