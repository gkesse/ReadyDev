//===============================================
#include "GProcessDisplayPicture.h"
//===============================================
GProcessDisplayPicture* GProcessDisplayPicture::m_instance = 0;
//===============================================
GProcessDisplayPicture::GProcessDisplayPicture() {

}
//===============================================
GProcessDisplayPicture::~GProcessDisplayPicture() {

}
//===============================================
GProcessDisplayPicture* GProcessDisplayPicture::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDisplayPicture;
    }
    return m_instance;
}
//===============================================
void GProcessDisplayPicture::run() {
    cv::Mat lImg = cv::imread("res/img/fruits.jpg",-1);
    if(lImg.empty()) return;
    cv::namedWindow("OpenCV | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::imshow("OpenCV | ReadyDev", lImg);
    cv::waitKey(0);
    cv::destroyWindow("OpenCV | ReadyDev");
}
//===============================================
