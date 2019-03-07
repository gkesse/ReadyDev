//================================================
#include "GDrawRgb.h"
//================================================
GDrawRgb* GDrawRgb::m_instance = 0;
//================================================
GDrawRgb::GDrawRgb() {

}
//================================================
GDrawRgb::~GDrawRgb() {
	
}
//================================================
GDrawRgb* GDrawRgb::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawRgb;
    }
    return m_instance;
}
//================================================
void GDrawRgb::cercle(cv::Mat& img, const int& xC, const int& yC, const int &r) {
    double lAngle = 0.0;
    while(1) {
        double lRad = (lAngle*M_PI)/180.0;
        double xR = r*cos(lRad);
        double yR = r*sin(lRad);
        int x = xC + (int)xR;
        int y = yC + (int)yR;

        cv::Vec3b lColorRgb;
        lColorRgb[0] = 255;
        lColorRgb[1] = 0;
        lColorRgb[2] = 0;

        img.at<cv::Vec3b>(y, x) = lColorRgb;

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================
