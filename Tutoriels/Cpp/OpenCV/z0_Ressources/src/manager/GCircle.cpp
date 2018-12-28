//================================================
#include "GCircle.h"
#include "GPixel.h"
//================================================
#define degToRad(angleInDegrees) ((angleInDegrees) * M_PI / 180.0)
#define radToDeg(angleInRadians) ((angleInRadians) * 180.0 / M_PI)
//================================================
GCircle* GCircle::m_instance = 0;
//================================================
GCircle::GCircle() {

}
//================================================
GCircle::~GCircle() {

}
//================================================
GCircle* GCircle::Instance() {
    if(m_instance == 0) {
        m_instance = new GCircle;
    }
    return m_instance;
}
//================================================
void GCircle::draw(cv::Mat& img, const int& xC, const int& yC, const int& rC, const uchar& r, const uchar& g, const uchar& b) {
    double lAngle = 0;

    while(1) {
        double lRad = degToRad(lAngle);
        double xR = rC*cos(lRad);
        double yR = rC*sin(lRad);
        int x = xC + (int)xR;
        int y = yC + (int)yR;

        GPixel::Instance()->setPixel(img, x, y, r, g, b);

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================
void GCircle::draw(cv::Mat& img, const int& xC, const int& yC, const int& rC, const uchar& color) {
    double lAngle = 0;

    while(1) {
        double lRad = degToRad(lAngle);
        double xR = rC*cos(lRad);
        double yR = rC*sin(lRad);
        int x = xC + (int)xR;
        int y = yC + (int)yR;

        GPixel::Instance()->setPixel(img, x, y, color);

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================
