//===============================================
#include "GProcessImageAccumulate.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
//===============================================
GProcessImageAccumulate* GProcessImageAccumulate::m_instance = 0;
//===============================================
GProcessImageAccumulate::GProcessImageAccumulate() {

}
//===============================================
GProcessImageAccumulate::~GProcessImageAccumulate() {

}
//===============================================
GProcessImageAccumulate* GProcessImageAccumulate::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageAccumulate;
    }
    return m_instance;
}
//===============================================
void GProcessImageAccumulate::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lAccImg;

    GImage::Instance()->load("res/img/fruits.png", lImg);
    GWindow::Instance()->create("OpenCV | ReadyDev");
    GImage::Instance()->accumulate(lImg, lAccImg);
    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev (Accumulate)", lAccImg);
    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
