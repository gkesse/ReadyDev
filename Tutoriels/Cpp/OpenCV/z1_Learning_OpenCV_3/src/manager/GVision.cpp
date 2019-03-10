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
    cv::Mat lImgSrc = m_imageMap[imageSrcName];
    cv::Mat lImgDst;
    lImgDst = lImgSrc.clone();
    m_imageMap[imageDstName] = lImgDst;
}
//===============================================
cv::Mat GVision::getImage(const string &imageName) {
    return m_imageMap[imageName];
}
//===============================================
void GVision::getImagePixel(const string &imageName, const int& x, const int& y, uchar& red, uchar& green, uchar& blue) {
    cv::Mat lImg = m_imageMap[imageName];
    cv::Vec3b lColor = lImg.at<cv::Vec3b>(y, x);
    red = lColor[2];
    green = lColor[1];
    blue = lColor[0];
}
//===============================================
void GVision::getImagePixel(const string &imageName, const int& x, const int& y, uchar &color) {
    cv::Mat lImg = m_imageMap[imageName];
    color = lImg.at<uchar>(y, x);
}
//===============================================
void GVision::setImagePixel(const string &imageName, const int& x, const int& y, const uchar &red, const uchar& green, const uchar& blue) {
    cv::Mat lImg = m_imageMap[imageName];
    int lWidth = lImg.size().width;
    int lHeight = lImg.size().height;
    if(x < 0 || x >= lWidth || y < 0 || y >= lHeight) return;
    cv::Vec3b lColor;
    lColor[2] = red;
    lColor[1] = green;
    lColor[0] = blue;
    lImg.at<cv::Vec3b>(y, x) = lColor;
}
//===============================================
void GVision::setImagePixel(const string &imageName, const int& x, const int& y, const uchar &color) {
    cv::Mat lImg = m_imageMap[imageName];
    lImg.at<uchar>(y, x) = color;
}
//===============================================
void GVision::getImageRoi(const string &imageName, const string& roiName, const int &x, const int &y, const int &w, const int &h) {
    cv::Mat lImg = m_imageMap[imageName];
    cv::Mat lRoi(lImg, cv::Rect(x, y, w, h));
    m_imageMap[roiName] = lRoi;
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
void GVision::invertImage(const string &imageName) {
    cv::Mat lImg = m_imageMap[imageName];
    cv::bitwise_not(lImg, lImg);
}
//===============================================
void GVision::invertImage(const string &imageSrcName, const string &imageDstName) {
    cv::Mat lImgSrc = m_imageMap[imageSrcName];
    cv::Mat lImgDst;
    cv::bitwise_not(lImgSrc, lImgDst);
    m_imageMap[imageDstName] = lImgDst;
}
//===============================================
void GVision::rectangle(const string &imageName, const int& x1, const int& y1, const int& x2, const int& y2, const uchar& red, const uchar& green, const uchar& blue, const int& thickness) {
    if(x1 < 0 || y1 < 0 || x2 < 0 || y2 < 0) return;
    cv::Mat lImg = m_imageMap[imageName];
    cv::Rect lRect(cv::Point(x1, y1), cv::Point(x2, y2));
    cv::Scalar lColor(blue, green, red);
    cv::rectangle(lImg, lRect, lColor, thickness);
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
void GVision::loadVideo(const string &videoName, const int& index) {
    cv::VideoCapture lCap;
    lCap.open(index);
    m_videoMap[videoName] = lCap;
}
//===============================================
void GVision::releaseVideo(const string &videoName) {
    cv::VideoCapture lCap = m_videoMap[videoName];
    if(lCap.isOpened()) lCap.release();
}
//===============================================
bool GVision::emptyVideo(const string &videoName) {
    cv::VideoCapture lCap = m_videoMap[videoName];
    bool lIsOpened = lCap.isOpened();
    bool lEmpty = !lIsOpened;
    return lEmpty;
}
//===============================================
void GVision::getVideoImage(const string &videoName, const string &imageName) {
    cv::VideoCapture lCap = m_videoMap[videoName];
    cv::Mat lImg;
    lCap >> lImg;
    m_imageMap[imageName] = lImg;
}
//===============================================
double GVision::getVideoProp(const string &videoName, const int &prop) {
    cv::VideoCapture lCap = m_videoMap[videoName];
    double lProp = lCap.get(prop);
    return lProp;
}
//===============================================
void GVision::createVideoWriter(const string& writerName, const string& writerFile, const double &fps, const int &width, const int &height) {
    cv::VideoWriter lWriter;
    lWriter.open(writerFile, CV_FOURCC('M','J','P','G'), fps, cv::Size(width, height));
    m_writerMap[writerName] = lWriter;
}
//===============================================
void GVision::setVideoWriterImage(const string& writerName, const string& imageName) {
    cv::VideoWriter lWriter = m_writerMap[writerName];
    cv::Mat lImg = m_imageMap[imageName];
    lWriter << lImg;
}
//===============================================
void GVision::releaseVideoWriter(const string& writerName) {
    cv::VideoWriter lWriter = m_writerMap[writerName];
    lWriter.release();
}
//===============================================
void GVision::createFileStorage(const string& storageName, const string& storageFile, const int& flags) {
    cv::FileStorage* lStorage = new cv::FileStorage(storageFile, flags);
    m_storageMap[storageName] = lStorage;
}
//===============================================
void GVision::setFileStorageData(const string& storageName, const string& key, const int &value) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    (*lStorage) << key << value;
}
//===============================================
void GVision::setFileStorageData(const string& storageName, const string& key, const cv::Mat &value) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    (*lStorage) << key << value;
}
//===============================================
void GVision::setFileStorageData(const string& storageName, const string& key, const vector<string>& value) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    (*lStorage) << key << "[";

    for(int i = 0; i < value.size(); i++) {
        string lValue = value[i];
        (*lStorage) << lValue;
    }

    (*lStorage) << "]";
}
//===============================================
void GVision::setFileStorageData(const string& storageName, const string& key, map<string, string> value) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    (*lStorage) << key << "{";

    for(map<string, string>::iterator item = value.begin(); item != value.end(); item++) {
        (*lStorage) << (string)item->first << (string)item->second;
    }

    (*lStorage) << "}";
}
//===============================================
int GVision::getFileStorageDataInt(const string& storageName, const string& key) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    int lData = (*lStorage)[key];
    return lData;
}
//===============================================
cv::Mat GVision::getFileStorageDataMat(const string& storageName, const string& key) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    cv::Mat lData;
    (*lStorage)[key] >> lData;
    return lData;
}
//===============================================
vector<string> GVision::getFileStorageDataList(const string& storageName, const string& key) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    cv::FileNode lNode = (*lStorage)[key];
    vector<string> lDataMap;

    for(cv::FileNodeIterator lItem = lNode.begin(); lItem != lNode.end(); lItem++) {
        lDataMap.push_back((string)*lItem);
    }

    return lDataMap;
}
//===============================================
map<string, string> GVision::getFileStorageDataMap(const string& storageName, const string& key) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    cv::FileNode lNode = (*lStorage)[key];
    map<string, string> lDataMap;

    for(cv::FileNodeIterator lItem = lNode.begin(); lItem != lNode.end(); lItem++) {
        string lKey = (*lItem).name();
        string lValue = (*lItem);
        lDataMap[lKey] = lValue;
    }

    return lDataMap;
}
//===============================================
void GVision::releaseFileStorage(const string& storageName) {
    cv::FileStorage* lStorage = m_storageMap[storageName];
    lStorage->release();
    delete lStorage;
}
//===============================================
void GVision::createMouseCallback(const string& windowName, cv::MouseCallback onMouse, void *params) {
    cv::setMouseCallback(windowName, onMouse, params);
}
//===============================================
//===============================================
