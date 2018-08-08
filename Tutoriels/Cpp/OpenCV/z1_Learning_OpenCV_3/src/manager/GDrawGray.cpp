//================================================
#include "GDrawGray.h"
//================================================
GDrawGray* GDrawGray::m_instance = 0;
//================================================
GDrawGray::GDrawGray() {

}
//================================================
GDrawGray::~GDrawGray() {
	
}
//================================================
GDrawGray* GDrawGray::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawGray;
    }
    return m_instance;
}
//================================================
void GDrawGray::cercle(cv::Mat& img, const int& xC, const int& yC, const int& r) {
    double lAngle = 0.0;
    while(1) {
        double lRad = qDegreesToRadians(lAngle);
        double xR = r*qCos(lRad);
        double yR = r*qSin(lRad);
        int x = xC + (int)xR;
        int y = yC + (int)yR;

        uchar lColorGray = 0;

        img.at<uchar>(y, x) = lColorGray;

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================
