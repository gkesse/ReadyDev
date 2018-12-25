//================================================
#include "GVideo.h"
//================================================
GVideo* GVideo::m_instance = 0;
//================================================
GVideo::GVideo() {

}
//================================================
GVideo::~GVideo() {
	
}
//================================================
GVideo* GVideo::Instance() {
	if(m_instance == 0) {
        m_instance = new GVideo;
	}
	return m_instance;
}
//================================================
void GVideo::load(const string& name, cv::VideoCapture& cap) {
    cap.open(name);
}
//================================================
void GVideo::open(const int& index, cv::VideoCapture& cap) {
    cap.open(index);
}
//================================================
void GVideo::image(cv::VideoCapture& cap, cv::Mat& img) {
    cap >> img;
}
//================================================
void GVideo::getProperty(cv::VideoCapture& cap, const int& key, double& prop) {
    prop = cap.get(key);
}
//================================================
void GVideo::setProperty(cv::VideoCapture& cap, const int& key, const double& prop) {
    cap.set(key, prop);
}
//================================================
void GVideo::relase(cv::VideoCapture& cap) {
    cap.release();
}
//================================================
void GVideo::codec(const cv::VideoCapture& cap, char* fourcc) {
    unsigned lFourcc = (unsigned)cap.get(cv::CAP_PROP_FOURCC);
    for(int i = 0; i < 4; i++) {
        int lShift = i*8;
        fourcc[i] = toupper((char)(lFourcc >> lShift));
    }
    fourcc[4] = 0;
}
//================================================
