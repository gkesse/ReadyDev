//================================================
#include "GVision.h"
//================================================
GVision* GVision::m_instance = 0;
//================================================
GVision::GVision() {

}
//================================================
GVision::~GVision() {
	
}
//================================================
GVision* GVision::Instance() {
	if(m_instance == 0) {
        m_instance = new GVision;
	}
	return m_instance;
}
//================================================
void GVision::loadImage(const string &imageName, const string &imageFile) {
    cv::Mat lImg = cv::imread(imageFile,-1);
    m_imageMap[imageName] = lImg;
}
//===============================================
bool GVision::emptyImage(const string &imageName) {
    cv::Mat lImg = m_imageMap[imageName];
    bool lEmpty = lImg.empty();
    return lEmpty;
}
//===============================================
void GVision::showImage(const string &imageName, const string &windowName) {
    cv::Mat lImg = m_imageMap[imageName];
    cv::imshow(windowName, lImg);
}
//===============================================
void GVision::copyImage(const string &imageSrcName, const string &imageDstName) {
    m_imageMap[imageDstName] = m_imageMap[imageSrcName];
}
//===============================================
void GVision::smoothImage(const string &imageSrcName, const string &imageDstName) {
    cv::Mat lImgSrc = m_imageMap[imageSrcName];
    cv::Mat lImgDst;
    cv::GaussianBlur(lImgSrc, lImgDst, cv::Size(5,5), 3, 3);
    m_imageMap[imageDstName] = lImgDst;
}
//===============================================
void GVision::pyramidImage(const string &imageSrcName, const string &imageDstName) {
    cv::Mat lImgSrc = m_imageMap[imageSrcName];
    cv::Mat lImgDst;
    cv::pyrDown(lImgSrc, lImgDst);
    m_imageMap[imageDstName] = lImgDst;
}
//===============================================
void GVision::cannyImage(const string &imageSrcName, const string &imageDstName) {
    cv::Mat lImgSrc = m_imageMap[imageSrcName];
    cv::Mat lImgDst;
    cv::Canny(lImgSrc, lImgDst, 10, 100, 3, true);
    m_imageMap[imageDstName] = lImgDst;
}
//===============================================
void GVision::convertImage(const string &imageSrcName, const string &imageDstName, int code) {
    cv::Mat lImgSrc = m_imageMap[imageSrcName];
    cv::Mat lImgDst;
    cv::cvtColor(lImgSrc, lImgDst, code);
    m_imageMap[imageDstName] = lImgDst;
}
//===============================================
void GVision::showWindow(const string &windowName) {
    cv::namedWindow(windowName, cv::WINDOW_AUTOSIZE);
}
//===============================================
void GVision::destroyWindow(const string &windowName) {
    cv::destroyWindow(windowName);
}
//===============================================
void GVision::destroyWindowAll() {
    cv::destroyAllWindows();
}
//===============================================
void GVision::createTrackbar(const string &trackbarName, const string &windowName, int* value, int count, cv::TrackbarCallback onTrackbar, void* params) {
    cv::createTrackbar(trackbarName, windowName, value, count, onTrackbar, params);
}
//===============================================
int GVision::waitKey(const int& delay) {
    char lChar = cv::waitKey(delay);
    return lChar;
}
//===============================================
void GVision::loadVideo(const string &videoName, const string &videoFile) {
    cv::VideoCapture lCap;
    lCap.open(videoFile);
    m_videoMap[videoName] = lCap;
}
//===============================================
void GVision::getVideoImage(const string &videoName, const string &imageName) {
    cv::VideoCapture lCap = m_videoMap[videoName];
    cv::Mat lImg;
    lCap >> lImg;
    m_imageMap[imageName] = lImg;
}
//===============================================
//===============================================
//===============================================
//===============================================
//===============================================
//===============================================
//===============================================
//===============================================
//===============================================
