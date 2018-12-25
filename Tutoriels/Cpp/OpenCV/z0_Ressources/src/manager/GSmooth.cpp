//================================================
#include "GSmooth.h"
//================================================
GSmooth* GSmooth::m_instance = 0;
//================================================
GSmooth::GSmooth() {

}
//================================================
GSmooth::~GSmooth() {
	
}
//================================================
GSmooth* GSmooth::Instance() {
	if(m_instance == 0) {
        m_instance = new GSmooth;
	}
	return m_instance;
}
//================================================
void GSmooth::smooth(const cv::Mat& src, cv::Mat& dst) {
    cv::GaussianBlur(src, dst, cv::Size(5,5), 3, 3);
}
//================================================
