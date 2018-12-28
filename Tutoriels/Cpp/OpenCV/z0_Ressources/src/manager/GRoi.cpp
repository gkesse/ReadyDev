//================================================
#include "GRoi.h"
//================================================
GRoi* GRoi::m_instance = 0;
//================================================
GRoi::GRoi() {

}
//================================================
GRoi::~GRoi() {

}
//================================================
GRoi* GRoi::Instance() {
    if(m_instance == 0) {
        m_instance = new GRoi;
    }
    return m_instance;
}
//================================================
void GRoi::roi(const cv::Mat& img, cv::Mat& roi, const int& x, const int& y, const int& w, const int& h) {
    roi = img(cv::Rect(x, y, w, h));
}
//================================================
