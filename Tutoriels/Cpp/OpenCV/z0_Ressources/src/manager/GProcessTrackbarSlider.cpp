//===============================================
#include "GProcessTrackbarSlider.h"
#include "GVideo.h"
#include "GImage.h"
#include "GWindow.h"
#include "GDelay.h"
#include "GTrackbar.h"
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::m_instance = 0;
cv::VideoCapture GProcessTrackbarSlider::m_cap;
//===============================================
GProcessTrackbarSlider::GProcessTrackbarSlider() {

}
//===============================================
GProcessTrackbarSlider::~GProcessTrackbarSlider() {

}
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessTrackbarSlider;
    }
    return m_instance;
}
//===============================================
void GProcessTrackbarSlider::run(int argc, char** argv) {
    cv::Mat lImg;
    int lPos = 445;
    double lFrameCount;

    GVideo::Instance()->load("res/video/tree.avi", m_cap);
    GWindow::Instance()->create("OpenCV | ReadyDev");

    GVideo::Instance()->getProperty(m_cap, cv::CAP_PROP_FRAME_COUNT, lFrameCount);
    GTrackbar::Instance()->create("Position", "OpenCV | ReadyDev", &lPos, (int)lFrameCount, onTrackbar);

    GVideo::Instance()->setProperty(m_cap, cv::CAP_PROP_POS_FRAMES, (double)lPos);
    GVideo::Instance()->image(m_cap, lImg);

    if(!lImg.empty()) {
        GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
        GDelay::Instance()->loop();
        GWindow::Instance()->destroy("OpenCV | ReadyDev");
    }
}
//===============================================
void GProcessTrackbarSlider::onTrackbar(int pos, void* params) {
    cv::Mat lImg;
    GVideo::Instance()->setProperty(m_cap, cv::CAP_PROP_POS_FRAMES, (double)pos);
    GVideo::Instance()->image(m_cap, lImg);
    if(lImg.empty()) return;
    GWindow::Instance()->show("OpenCV | ReadyDev", lImg);
}
//===============================================
