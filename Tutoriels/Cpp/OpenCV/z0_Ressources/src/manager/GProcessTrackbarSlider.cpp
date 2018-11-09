//===============================================
#include "GProcessTrackbarSlider.h"
#include "GOpenCV.h"
//===============================================
GProcessTrackbarSlider* GProcessTrackbarSlider::m_instance = 0;
//===============================================
GProcessTrackbarSlider::GProcessTrackbarSlider() {

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
void GProcessTrackbarSlider::run() {
    GOpenCV::Instance()->playVideo("res/video/tree.avi");
}
//===============================================
