//================================================
#include "GBlend.h"
//================================================
GBlend* GBlend::m_instance = 0;
//================================================
GBlend::GBlend() {

}
//================================================
GBlend::~GBlend() {

}
//================================================
GBlend* GBlend::Instance() {
    if(m_instance == 0) {
        m_instance = new GBlend;
    }
    return m_instance;
}
//================================================
void GBlend::blend(const cv::Mat& src1, const double& alpha, const cv::Mat& src2, const double& beta, cv::Mat& dst) {
    cv::addWeighted(src1, alpha, src2, beta, 0.0, dst);
}
//================================================
