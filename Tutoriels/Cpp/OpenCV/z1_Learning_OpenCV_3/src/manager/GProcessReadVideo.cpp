//===============================================
#include "GProcessReadVideo.h"
//===============================================
GProcessReadVideo* GProcessReadVideo::m_instance = 0;
//===============================================
GProcessReadVideo::GProcessReadVideo() {

}
//===============================================
GProcessReadVideo::~GProcessReadVideo() {

}
//===============================================
GProcessReadVideo* GProcessReadVideo::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessReadVideo;
    }
    return m_instance;
}
//===============================================
void GProcessReadVideo::run() {
    cv::namedWindow("Lire Vidéo | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::VideoCapture lCap;
    lCap.open("res/video/tree.avi");
    cv::Mat lFrame;

    while(1) {
        lCap >> lFrame;
        if(lFrame.empty()) break;
        cv::imshow("Lire Vidéo | ReadyDev", lFrame);
        if(cv::waitKey(33) >= 0) break;
    }
}
//===============================================
