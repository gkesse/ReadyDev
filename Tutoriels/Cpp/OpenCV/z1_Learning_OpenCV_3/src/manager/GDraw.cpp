//================================================
#include "GDraw.h"
#include "GDrawBox.h"
#include "GVision.h"
#include "GMath.h"
#include "GConfig.h"
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {
	
}
//================================================
GDraw* GDraw::Instance() {
    string lKey = GConfig::Instance()->getData("DRAW");
    if(lKey == "BOX") return GDrawBox::Instance();
    return GDrawBox::Instance();
}
//================================================
void GDraw::circle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar& color) {
    if(xC < 0 || yC < 0) return;
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
void GDraw::circle(const string& imageName, const int& xC, const int& yC, const int& rC, const uchar &red, const uchar &green, const uchar &blue) {
    if(xC < 0 || yC < 0) return;
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
