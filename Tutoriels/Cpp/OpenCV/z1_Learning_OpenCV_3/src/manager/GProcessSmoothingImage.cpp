//===============================================
#include "GProcessSmoothingImage.h"
//===============================================
GProcessSmoothingImage* GProcessSmoothingImage::m_instance = 0;
//===============================================
GProcessSmoothingImage::GProcessSmoothingImage() {

}
//===============================================
GProcessSmoothingImage::~GProcessSmoothingImage() {

}
//===============================================
GProcessSmoothingImage* GProcessSmoothingImage::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSmoothingImage;
    }
    return m_instance;
}
//===============================================
void GProcessSmoothingImage::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Image Lissée | ReadyDev", cv::WINDOW_AUTOSIZE);

    cv::Mat lImage = cv::imread("res/img/fruits.jpg",-1);
    cv::imshow("Image Originale | ReadyDev", lImage);

    cv::Mat lSmooth;
    cv::GaussianBlur(lImage, lSmooth, cv::Size(5,5), 3, 3);
    cv::GaussianBlur(lSmooth, lSmooth, cv::Size(5,5), 3, 3);

    cv::imshow("Image Lissée | ReadyDev", lSmooth);

    cv::waitKey(0);
}
//===============================================
