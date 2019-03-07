//===============================================
#include "GProcessTrackbarSlider.h"
#include "GVision.h"
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::m_instance = 0;
//===============================================
GProcessTrackbarSlider::GProcessTrackbarSlider() {
    m_trackbar.run = 1;
    m_trackbar.dontset = 0;
    m_position = 0;
}
//===============================================
GProcessTrackbarSlider::~GProcessTrackbarSlider() {

}
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessTrackbarSlider;
    }
    return m_instance;
}
//===============================================
void GProcessTrackbarSlider::onTrackbar(int pos, void *params) {
    cout << "POSITION: " << pos << "\n";
}
//===============================================
void GProcessTrackbarSlider::run() {
    GVision::Instance()->showWindow("TRACKBAR");
    GVision::Instance()->loadImage("IMAGE", "res/img/fruits.jpg");
    GVision::Instance()->showImage("IMAGE", "TRACKBAR");
    int lPos = 50;
    GVision::Instance()->createTrackbar("SEUIL", "TRACKBAR", &lPos, 100, onTrackbar);
    GVision::Instance()->waitKey(0);
    GVision::Instance()->destroyWindow("TRACKBAR");
}
//===============================================
