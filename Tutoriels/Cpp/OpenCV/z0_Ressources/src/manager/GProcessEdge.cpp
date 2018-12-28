//===============================================
#include "GProcessEdge.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GConvert.h"
#include "GEdge.h"
//===============================================
GProcessEdge* GProcessEdge::m_instance = 0;
//===============================================
GProcessEdge::GProcessEdge() {

}
//===============================================
GProcessEdge::~GProcessEdge() {

}
//===============================================
GProcessEdge* GProcessEdge::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessEdge;
    }
    return m_instance;
}
//===============================================
void GProcessEdge::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lGrayImg;
    cv::Mat lCannyImg;

    GWindow::Instance()->create("OpenCV | ReadyDev");
    GWindow::Instance()->create("OpenCV | ReadyDev | Gray");
    GWindow::Instance()->create("OpenCV | ReadyDev | Canny");

    GImage::Instance()->load("res/img/fruits.jpg", lImg);
    GConvert::Instance()->convert(lImg, lGrayImg, cv::COLOR_BGR2GRAY);
    GEdge::Instance()->canny(lGrayImg, lCannyImg);

    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev | Gray", lGrayImg);
    GWindow::Instance()->show("OpenCV | ReadyDev | Canny", lCannyImg);

    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
