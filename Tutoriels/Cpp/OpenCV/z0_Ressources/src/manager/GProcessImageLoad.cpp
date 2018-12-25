//===============================================
#include "GProcessImageLoad.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
//===============================================
GProcessImageLoad* GProcessImageLoad::m_instance = 0;
//===============================================
GProcessImageLoad::GProcessImageLoad() {

}
//===============================================
GProcessImageLoad::~GProcessImageLoad() {

}
//===============================================
GProcessImageLoad* GProcessImageLoad::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageLoad;
    }
    return m_instance;
}
//===============================================
void GProcessImageLoad::run(int argc, char** argv) {
    cv::Mat lImg;
    GImage::Instance()->load("res/img/fruits.jpg", lImg);
    GWindow::Instance()->create("OpenCV | ReadyDev");
    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GDelay::Instance()->loop();
    GWindow::Instance()->destroy("OpenCV | ReadyDev");
}
//===============================================
