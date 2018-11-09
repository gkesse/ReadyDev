//================================================
#include "GOpenCV.h"
//================================================
GOpenCV* GOpenCV::m_instance = 0;
//================================================
GOpenCV::GOpenCV() {

}
//================================================
GOpenCV::~GOpenCV() {
	
}
//================================================
GOpenCV* GOpenCV::Instance() {
	if(m_instance == 0) {
        m_instance = new GOpenCV;
	}
	return m_instance;
}
//================================================
void GOpenCV::loadImage(const string& name) {
    cv::Mat lImg = cv::imread(name, -1);
    cv::namedWindow("OpenCV | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::imshow("OpenCV | ReadyDev", lImg);
    cv::waitKey(0);
    cv::destroyWindow("OpenCV | ReadyDev");
}
//================================================
void GOpenCV::playVideo(const string& name) {
    cv::VideoCapture lCap;
    lCap.open(name);

    cv::namedWindow("OpenCV | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::Mat lImg;

    cv::createTrackbar("Position", "OpenCV | ReadyDev", &m_pos, 100, onTrackbarSlider);

    while(1) {
        lCap >> lImg;
        if(lImg.empty()) break;
        cv::imshow("OpenCV | ReadyDev", lImg);
        if(cv::waitKey(33) >= 0) break;
    }

    cv::destroyWindow("OpenCV | ReadyDev");
}
//================================================
