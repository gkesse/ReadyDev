//===============================================
#include "GProcessImagePyramid.h"
//===============================================
GProcessImagePyramid* GProcessImagePyramid::m_instance = 0;
//===============================================
GProcessImagePyramid::GProcessImagePyramid() {

}
//===============================================
GProcessImagePyramid::~GProcessImagePyramid() {

}
//===============================================
GProcessImagePyramid* GProcessImagePyramid::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessImagePyramid;
    }
    return m_instance;
}
//===============================================
void GProcessImagePyramid::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Pyramide Image 01 | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Pyramide Image 02 | ReadyDev", cv::WINDOW_AUTOSIZE);

    cv::Mat lImage = cv::imread("res/img/fruits.jpg",-1);
    cv::imshow("Image Originale | ReadyDev", lImage);

    cv::Mat lPyramid;
    cv::pyrDown(lImage, lPyramid);
    cv::imshow("Pyramide Image 01 | ReadyDev", lPyramid);

    cv::Mat lPyramid2;
    cv::pyrDown(lPyramid, lPyramid2);
    cv::imshow("Pyramide Image 02 | ReadyDev", lPyramid2);

    cv::waitKey(0);
}
//===============================================
