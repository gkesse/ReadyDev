//===============================================
#include "GProcessCannyEdge.h"
//===============================================
GProcessCannyEdge* GProcessCannyEdge::m_instance = 0;
//===============================================
GProcessCannyEdge::GProcessCannyEdge() {

}
//===============================================
GProcessCannyEdge::~GProcessCannyEdge() {

}
//===============================================
GProcessCannyEdge* GProcessCannyEdge::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessCannyEdge;
    }
    return m_instance;
}
//===============================================
void GProcessCannyEdge::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Image Niveau Gris | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Détection Contour | ReadyDev", cv::WINDOW_AUTOSIZE);

    cv::Mat lImgRgb = cv::imread("res/img/fruits.jpg",-1);
    cv::imshow("Image Originale | ReadyDev", lImgRgb);

    cv::Mat lImgGray;
    cv::cvtColor(lImgRgb, lImgGray, cv::COLOR_BGR2GRAY);
    cv::imshow("Image Niveau Gris | ReadyDev", lImgGray);

    cv::Mat lImgCanny;
    cv::Canny(lImgGray, lImgCanny, 10, 100, 3, true);
    cv::imshow("Détection Contour | ReadyDev", lImgCanny);

    cv::waitKey(0);
}
//===============================================
