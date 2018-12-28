//================================================
#include "GPixel.h"
//================================================
GPixel* GPixel::m_instance = 0;
//================================================
GPixel::GPixel() {

}
//================================================
GPixel::~GPixel() {
	
}
//================================================
GPixel* GPixel::Instance() {
	if(m_instance == 0) {
        m_instance = new GPixel;
	}
	return m_instance;
}
//================================================
void GPixel::setPixel(cv::Mat& img, const int& x, const int& y, const uchar& r, const uchar& g, const uchar& b) {
    img.at<cv::Vec3b>(y, x)[2] = r;
    img.at<cv::Vec3b>(y, x)[1] = g;
    img.at<cv::Vec3b>(y, x)[0] = b;
}
//================================================
void GPixel::setPixel(cv::Mat& img, const int& x, const int& y, const uchar& color) {
    img.at<uchar>(y, x) = color;
}
//================================================
