//================================================
#include "GPyramid.h"
//================================================
GPyramid* GPyramid::m_instance = 0;
//================================================
GPyramid::GPyramid() {

}
//================================================
GPyramid::~GPyramid() {
	
}
//================================================
GPyramid* GPyramid::Instance() {
	if(m_instance == 0) {
        m_instance = new GPyramid;
	}
	return m_instance;
}
//================================================
void GPyramid::pyramid(const cv::Mat& src, cv::Mat& dst) {
    cv::pyrDown(src, dst);
}
//================================================
