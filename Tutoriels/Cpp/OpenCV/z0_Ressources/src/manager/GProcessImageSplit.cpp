//===============================================
#include "GProcessImageSplit.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
//===============================================
GProcessImageSplit* GProcessImageSplit::m_instance = 0;
//===============================================
GProcessImageSplit::GProcessImageSplit() {

}
//===============================================
GProcessImageSplit::~GProcessImageSplit() {

}
//===============================================
GProcessImageSplit* GProcessImageSplit::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImageSplit;
    }
    return m_instance;
}
//===============================================
void GProcessImageSplit::run(int argc, char** argv) {
    cv::Mat lImg;
    vector<cv::Mat> lImgMap;

    GImage::Instance()->load("res/img/fruits.png", lImg);
    GWindow::Instance()->create("OpenCV | ReadyDev");
    GWindow::Instance()->create("OpenCV | ReadyDev (Red)");
    GWindow::Instance()->create("OpenCV | ReadyDev (Green)");
    GWindow::Instance()->create("OpenCV | ReadyDev (Blue)");
    GImage::Instance()->split(lImg, lImgMap);
    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
    GWindow::Instance()->show("OpenCV | ReadyDev (Red)", lImgMap[2]);
    GWindow::Instance()->show("OpenCV | ReadyDev (Green)", lImgMap[1]);
    GWindow::Instance()->show("OpenCV | ReadyDev (Blue)", lImgMap[0]);
    GDelay::Instance()->loop();
    GWindow::Instance()->destroyAll();
}
//===============================================
