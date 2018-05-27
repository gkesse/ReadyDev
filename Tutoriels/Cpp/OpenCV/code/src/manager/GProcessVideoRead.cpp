//===============================================
#include "GProcessVideoRead.h"
#include "GVideo.h"
//===============================================
GProcessVideoRead* GProcessVideoRead::m_instance = 0;
//===============================================
GProcessVideoRead::GProcessVideoRead() {

}
//===============================================
GProcessVideoRead::~GProcessVideoRead() {

}
//===============================================
GProcessVideoRead* GProcessVideoRead::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessVideoRead;
    }
    return m_instance;
}
//===============================================
void GProcessVideoRead::run() {
    GVideo::Instance()->readVideo("res/video/tree.avi");
}
//===============================================
