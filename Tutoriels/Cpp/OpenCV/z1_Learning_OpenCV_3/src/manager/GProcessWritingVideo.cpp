//===============================================
#include "GProcessWritingVideo.h"
//===============================================
GProcessWritingVideo* GProcessWritingVideo::m_instance = 0;
//===============================================
GProcessWritingVideo::GProcessWritingVideo() {

}
//===============================================
GProcessWritingVideo::~GProcessWritingVideo() {

}
//===============================================
GProcessWritingVideo* GProcessWritingVideo::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessWritingVideo;
    }
    return m_instance;
}
//===============================================
void GProcessWritingVideo::run() {
    cv::namedWindow("Writing Vidéo | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::VideoCapture lCap;
    lCap.open(0);
    if(!lCap.isOpened()) return;
    cv::Mat lFrame;

    cout << "\n### Information Video\n\n";

    while(1) {
        lCap >> lFrame;
        if(lFrame.empty()) break;
        cv::imshow("Writing Vidéo | ReadyDev", lFrame);
        if(cv::waitKey(33) >= 0) break;
    }
}
//===============================================
