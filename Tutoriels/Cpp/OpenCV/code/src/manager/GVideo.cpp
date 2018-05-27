//===============================================
#include "GVideo.h"
//===============================================
GVideo* GVideo::m_instance = 0;
//===============================================
GVideo::GVideo() {
    m_windowName = "OpenCV | ReadyDev";
}
//===============================================
GVideo::~GVideo() {

}
//===============================================
GVideo* GVideo::Instance() {
    if(m_instance == 0) {
        m_instance = new GVideo;
    }
    return m_instance;
}
//===============================================
void GVideo::readVideo(const char* filename) {
    cv::namedWindow(m_windowName, cv::WINDOW_AUTOSIZE);
    cv::VideoCapture cap;
    cap.open(filename);
    cv::Mat frame;
    while(1) {
        cap >> frame;
        if(frame.empty()) break;
        cv::imshow(m_windowName, frame);
        if((char)cv::waitKey(33) >= 0) break;
    }
}
//===============================================
