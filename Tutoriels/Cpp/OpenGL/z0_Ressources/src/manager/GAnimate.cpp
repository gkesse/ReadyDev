//===============================================
#include "GAnimate.h"
#include "GAnimateNoAnimate.h"
#include "GAnimateRotate.h"
#include "GConfig.h"
//===============================================
GAnimate::GAnimate() {

}
//===============================================
GAnimate::~GAnimate() {

}
//===============================================
GAnimate* GAnimate::Instance() {
    string lAnimate = GConfig::Instance()->getData("ANIMATE");
    if(lAnimate == "NO_ANIMATE") return GAnimateNoAnimate::Instance();
    if(lAnimate == "ROTATE") return GAnimateRotate::Instance();
    return GAnimateNoAnimate::Instance();
}
//================================================
void GAnimate::animate() {}
//================================================
