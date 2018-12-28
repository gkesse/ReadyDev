//===============================================
#include "GProcessImageEqualize.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
//===============================================
GProcessImageEqualize* GProcessImageEqualize::m_instance = 0;
//===============================================
GProcessImageEqualize::GProcessImageEqualize() {

}
//===============================================
GProcessImageEqualize::~GProcessImageEqualize() {

}
//===============================================
GProcessImageEqualize* GProcessImageEqualize::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageEqualize;
    }
    return m_instance;
}
//===============================================
void GProcessImageEqualize::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lEqualizeImg;

    GImage::Instance()->load("res/img/fruits.png", lImg);
    GWindow::Instance()->create("OpenCV | ReadyDev");
    GImage::Instance()->equalize(lImg, lEqualizeImg);
    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev (Equalize)", lEqualizeImg);
    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
