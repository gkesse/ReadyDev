//================================================
#include "GTrackbar.h"
//================================================
GTrackbar* GTrackbar::m_instance = 0;
//================================================
GTrackbar::GTrackbar() {

}
//================================================
GTrackbar::~GTrackbar() {

}
//================================================
GTrackbar* GTrackbar::Instance() {
    if(m_instance == 0) {
        m_instance = new GTrackbar;
    }
    return m_instance;
}
//================================================
void GTrackbar::create(const string& name, const string& title, int* pos, int max, cv::TrackbarCallback onTrackbar, void* params) {
    cv::createTrackbar(name, title, pos, max, onTrackbar, params);
}
//================================================
