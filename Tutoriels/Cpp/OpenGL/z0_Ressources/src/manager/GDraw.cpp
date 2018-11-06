//===============================================
#include "GDraw.h"
#include "GDrawTriangle.h"
#include "GDrawPoint.h"
#include "GConfig.h"
//===============================================
GDraw::GDraw() {

}
//===============================================
GDraw::~GDraw() {

}
//===============================================
GDraw* GDraw::Instance() {
    string lDraw = GConfig::Instance()->getData("DRAW");
    if(lDraw == "TRIANGLE") return GDrawTriangle::Instance();
    if(lDraw == "POINT") return GDrawPoint::Instance();
    return GDrawTriangle::Instance();
}
//================================================
void GDraw::draw() {}
//================================================
