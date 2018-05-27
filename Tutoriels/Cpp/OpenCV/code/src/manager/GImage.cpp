//===============================================
#include "GImage.h"
//===============================================
GImage* GImage::m_instance = 0;
//===============================================
GImage::GImage() {
    m_windowName = "OpenCV | ReadyDev";
}
//===============================================
GImage::~GImage() {

}
//===============================================
GImage* GImage::Instance() {
    if(m_instance == 0) {
        m_instance = new GImage;
    }
    return m_instance;
}
//===============================================
void GImage::loadImage(const char* filename) {
    cv::Mat lImg = cv::imread(filename, -1);
    cv::namedWindow(m_windowName, cv::WINDOW_AUTOSIZE);
    cv::imshow(m_windowName, lImg);
    cv::waitKey(0);
    cv::destroyWindow(m_windowName);
}
//===============================================
