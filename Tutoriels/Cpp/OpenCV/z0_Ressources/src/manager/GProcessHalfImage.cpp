//===============================================
#include "GProcessHalfImage.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GHalf.h"
//===============================================
GProcessHalfImage* GProcessHalfImage::m_instance = 0;
//===============================================
GProcessHalfImage::GProcessHalfImage() {

}
//===============================================
GProcessHalfImage::~GProcessHalfImage() {

}
//===============================================
GProcessHalfImage* GProcessHalfImage::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessHalfImage;
    }
    return m_instance;
}
//===============================================
void GProcessHalfImage::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lDstImg;

    GWindow::Instance()->create("OpenCV | ReadyDev");
    GWindow::Instance()->create("OpenCV | ReadyDev | Half");

    GImage::Instance()->load("res/img/fruits.jpg", lImg);
    GHalf::Instance()->half(lImg, lDstImg);

    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev | Half", lDstImg);

    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
