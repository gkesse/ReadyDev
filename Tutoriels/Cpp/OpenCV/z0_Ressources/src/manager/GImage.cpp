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
void GImage::copy(const cv::Mat &img, QImage& qimg) {
    cv::Mat lImg(cv::Size(qimg.width(), qimg.height()), CV_8UC3, qimg.bits());
    cv::cvtColor(img, lImg, CV_BGR2RGB);
}
//================================================
void GImage::allocate(const cv::Mat& src, QImage& dst) {
    dst = QImage(QSize(src.cols, src.rows), QImage::Format_RGB888);
}
//===============================================
void GImage::rectangle(cv::Mat& img, const cv::Rect& rect, const cv::Scalar& color, const int& thickness) {
    cv::rectangle(img, rect.tl(), rect.br(), color, thickness);
}
//================================================
void GImage::split(const cv::Mat& src, vector<cv::Mat>& dst) {
    cv::split(src, dst);
}
//================================================
void GImage::threshold(const cv::Mat& src, cv::Mat& dst, const double& thres, const int& type) {
    cv::threshold(src, dst, thres, 255, type);
}
//================================================
void GImage::threshold(const cv::Mat& src, cv::Mat& dst, const double& thres, const int& type) {
    cv::adaptiveThreshold(src, dst, 255, method, type, size, thres);
}
//================================================
void GImage::convert(const cv::Mat& src, cv::Mat& dst, const int& code) {
    cv::cvtColor(src, dst, code);
}
//================================================
void GImage::equalize(const cv::Mat& src, cv::Mat& dst) {
    vector<cv::Mat> lImgMap;
    cv::split(src, lImgMap);
    cv::addWeighted(lImgMap[0], 1.0/3, lImgMap[1], 1.0/3, 0.0, dst);
    cv::addWeighted(lImgMap[2], 1.0/3, dst, 1.0, 0.0, dst);
}
//================================================
void GImage::accumulate(const cv::Mat& src, cv::Mat& dst) {
    vector<cv::Mat> lImgMap;
    cv::Mat lImg = cv::Mat::zeros(src.size(), CV_32F);
    cv::split(src, lImgMap);
    cv::accumulate(lImgMap[0], lImg);
    cv::accumulate(lImgMap[1], lImg);
    cv::accumulate(lImgMap[2], lImg);
    lImg.convertTo(dst, lImgMap[0].type());
}
//================================================
