//===============================================
#include "GProcessPyramid.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GPyramid.h"
//===============================================
GProcessPyramid* GProcessPyramid::m_instance = 0;
//===============================================
GProcessPyramid::GProcessPyramid() {

}
//===============================================
GProcessPyramid::~GProcessPyramid() {

}
//===============================================
GProcessPyramid* GProcessPyramid::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPyramid;
    }
    return m_instance;
}
//===============================================
void GProcessPyramid::run(int argc, char** argv) {
    cv::Mat lImg;
    cv::Mat lPyramidImg;
    cv::Mat lPyramidImg2;

    GWindow::Instance()->create("OpenCV | ReadyDev");
    GWindow::Instance()->create("OpenCV | ReadyDev | Pyramid");
    GWindow::Instance()->create("OpenCV | ReadyDev | Pyramid (2)");

    GImage::Instance()->load("res/img/fruits.jpg", lImg);
    GPyramid::Instance()->pyramid(lImg, lPyramidImg);
    GPyramid::Instance()->pyramid(lPyramidImg, lPyramidImg2);

    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev | Pyramid", lPyramidImg);
    GWindow::Instance()->show("OpenCV | ReadyDev | Pyramid (2)", lPyramidImg2);

    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
