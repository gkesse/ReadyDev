//===============================================
#include "GTrackbarSet.h"
//===============================================
GTrackbarSet* GTrackbarSet::m_instance = 0;
//===============================================
GTrackbarSet::GTrackbarSet() {

}
//===============================================
GTrackbarSet::~GTrackbarSet() {

}
//===============================================
GTrackbarSet* GTrackbarSet::Instance() {
    if(m_instance == 0) {
        m_instance = new GTrackbarSet;
    }
    return m_instance;
}
//===============================================
void GTrackbarSet::setTrackbar(const string& name, const string& title, int* pos, int count, cv::TrackbarCallback onTrackbarSlider, void* params) {
    cv::createTrackbar(name, title, pos, count, onTrackbarSlider, params);
}
//===============================================
