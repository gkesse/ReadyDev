//================================================
#include "GDraw.h"
#include "GVision.h"
#include "GMath.h"
//================================================
GDraw* GDraw::m_instance = 0;
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {
	
}
//================================================
GDraw* GDraw::Instance() {
    if(m_instance == 0) {
        m_instance = new GDraw;
    }
    return m_instance;
}
//================================================
void GDraw::cercle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar& color) {
    double lAngle = 0.0;

    while(1) {
        double lRad = GMath::Instance()->degreeToRadian(lAngle);
        double lXr = rC*cos(lRad);
        double lYr = rC*sin(lRad);
        int lX = xC + (int)lXr;
        int lY = yC + (int)lYr;

        GVision::Instance()->setImagePixel(imageName, lX, lY, color);

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================
void GDraw::cercle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar &red, const uchar &green, const uchar &blue) {
    double lAngle = 0.0;

    while(1) {
        double lRad = GMath::Instance()->degreeToRadian(lAngle);
        double lXr = rC*cos(lRad);
        double lYr = rC*sin(lRad);
        int lX = xC + (int)lXr;
        int lY = yC + (int)lYr;

        GVision::Instance()->setImagePixel(imageName, lX, lY, red, green, blue);

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================
