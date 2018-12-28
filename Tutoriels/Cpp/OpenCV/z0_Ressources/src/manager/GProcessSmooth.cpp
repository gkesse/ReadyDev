//===============================================
#include "GProcessSmooth.h"
#include "GVideo.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GSmooth.h"
//===============================================
GProcessSmooth* GProcessSmooth::m_instance = 0;
//===============================================
GProcessSmooth::GProcessSmooth() {

}
//===============================================
GProcessSmooth::~GProcessSmooth() {

}
//===============================================
GProcessSmooth* GProcessSmooth::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSmooth;
    }
    return m_instance;
}
//===============================================
void GProcessSmooth::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lSmoothImg;

    GWindow::Instance()->create("OpenCV | ReadyDev");
    GWindow::Instance()->create("OpenCV | ReadyDev | Smooth");

    GImage::Instance()->load("res/img/fruits.jpg", lImg);
    GSmooth::Instance()->smooth(lImg, lSmoothImg);
    GSmooth::Instance()->smooth(lSmoothImg, lSmoothImg);
    GSmooth::Instance()->smooth(lSmoothImg, lSmoothImg);

    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev | Smooth", lSmoothImg);

    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
