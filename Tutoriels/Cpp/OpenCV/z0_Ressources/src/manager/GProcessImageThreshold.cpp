//===============================================
#include "GProcessImageThreshold.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
//===============================================
GProcessImageThreshold* GProcessImageThreshold::m_instance = 0;
//===============================================
GProcessImageThreshold::GProcessImageThreshold() {

}
//===============================================
GProcessImageThreshold::~GProcessImageThreshold() {

}
//===============================================
GProcessImageThreshold* GProcessImageThreshold::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageThreshold;
    }
    return m_instance;
}
//===============================================
void GProcessImageThreshold::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lGrayImg;
    cv::Mat lThresImg;

    GImage::Instance()->load("res/img/fruits.png", lImg);
    GWindow::Instance()->create("OpenCV | ReadyDev");
    GImage::Instance()->convert(lImg, lGrayImg, CV_BGR2GRAY);
    GImage::Instance()->threshold(lGrayImg, lThresImg, 100, cv::THRESH_BINARY);
    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev (Gray)", lGrayImg);
    GWindow::Instance()->show("OpenCV | ReadyDev(Thres)", lThresImg);
    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
