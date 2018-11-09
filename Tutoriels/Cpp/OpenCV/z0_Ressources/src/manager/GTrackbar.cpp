//===============================================
#include "GTrackbar.h"
#include "GTrackbarNoSet.h"
#include "GTrackbarSet.h"
#include "GConfig.h"
//===============================================
GTrackbar::GTrackbar() {

}
//===============================================
GTrackbar::~GTrackbar() {

}
//===============================================
GTrackbar* GTrackbar::Instance() {
    string lTrackbar = GConfig::Instance()->getData("TRACKBAR");
    if(lTrackbar == "NO_SET") return GTrackbarNoSet::Instance();
    if(lTrackbar == "SET") return GTrackbarSet::Instance();
    return GTrackbarNoSet::Instance();
}
//===============================================
void GTrackbar::setTrackbar(const string& name) {}
//===============================================
