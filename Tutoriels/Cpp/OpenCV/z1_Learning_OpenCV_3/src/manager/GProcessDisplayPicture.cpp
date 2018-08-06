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
    cv::namedWindow("Afficher Image | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::imshow("Afficher Image | ReadyDev", lImg);
    cv::waitKey(0);
    cv::destroyWindow("Afficher Image | ReadyDev");
}
//===============================================
