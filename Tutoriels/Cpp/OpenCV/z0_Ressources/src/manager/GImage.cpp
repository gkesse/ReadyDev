//================================================
#include "GImage.h"
//================================================
GImage* GImage::m_instance = 0;
//================================================
GImage::GImage() {

}
//================================================
GImage::~GImage() {
	
}
//================================================
GImage* GImage::Instance() {
	if(m_instance == 0) {
        m_instance = new GImage;
	}
	return m_instance;
}
//================================================
void GImage::load(const string& name, cv::Mat& img) {
    img = cv::imread(name, -1);
}
//================================================
void GImage::center(const cv::Mat& img, int& xC, int& yC) {
    cv::Size lSize = img.size();
    int lWidth = lSize.width;
    int lHeight = lSize.height;
    xC = lWidth / 2;
    yC = lHeight / 2;
}
//================================================
void GImage::width(const cv::Mat& img, int& w) {
    w = img.size().width;
}
//================================================
void GImage::height(const cv::Mat& img, int& h) {
    h = img.size().height;
}
//================================================
void GImage::size(const cv::Mat& img, int& w, int& h) {
    w = img.size().width;
    h = img.size().height;
}
//================================================
void GImage::create(cv::Mat& img, const int& w, const int& h) {
    img = cv::Mat(w, h, CV_8UC3);
    img = cv::Scalar::all(0);
}
//================================================
void GImage::copy(const cv::Mat& src, cv::Mat& dst) {
    src.copyTo(dst);
}
//================================================
void GImage::copy(const cv::Mat& src, QImage& dst) {
    dst = QImage(QSize(src.cols, src.rows), QImage::Format_RGB888);
}
//================================================
void GImage::convert(const cv::Mat &img, QImage& qimg) {
    cv::Mat lImg(cv::Size(qimg.width(), qimg.height()),CV_8UC3, qimg.bits());
    cv::cvtColor(img, lImg, CV_BGR2RGB);
}
//===============================================
void GImage::rectangle(cv::Mat& img, const cv::Rect& rect, const cv::Scalar& color, const int& thickness) {
    cv::rectangle(img, rect.tl(), rect.br(), color, thickness);
}
//================================================
