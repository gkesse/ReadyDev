//================================================
#include "GConvert.h"
//================================================
GConvert* GConvert::m_instance = 0;
//================================================
GConvert::GConvert() {

}
//================================================
GConvert::~GConvert() {
	
}
//================================================
GConvert* GConvert::Instance() {
	if(m_instance == 0) {
        m_instance = new GConvert;
	}
	return m_instance;
}
//================================================
void GConvert::convert(const cv::Mat& src, cv::Mat& dst, const int& code) {
    cv::cvtColor(src, dst, code);
}
//================================================
