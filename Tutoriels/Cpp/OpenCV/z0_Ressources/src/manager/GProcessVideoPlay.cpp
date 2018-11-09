//===============================================
#include "GProcessVideoPlay.h"
#include "GOpenCV.h"
//===============================================
GProcessVideoPlay* GProcessVideoPlay::m_instance = 0;
//===============================================
GProcessVideoPlay::GProcessVideoPlay() {

}
//===============================================
GProcessVideoPlay::~GProcessVideoPlay() {

}
//===============================================
GProcessVideoPlay* GProcessVideoPlay::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessVideoPlay;
    }
    return m_instance;
}
//===============================================
void GProcessVideoPlay::run() {
    GOpenCV::Instance()->playVideo("res/video/tree.avi");
}
//===============================================
