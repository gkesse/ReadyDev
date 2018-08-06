//===============================================
#include "GProcessDisplayPicture.h"
//===============================================
GProcessDisplayPicture* GProcessDisplayPicture::m_instance = 0;
//===============================================
GProcessDisplayPicture::GProcessDisplayPicture() {

}
//===============================================
GProcessDisplayPicture::~GProcessDisplayPicture() {

}
//===============================================
GProcessDisplayPicture* GProcessDisplayPicture::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDisplayPicture;
    }
    return m_instance;
}
//===============================================
void GProcessDisplayPicture::run() {
    cout << "OpenCV\n";
}
//===============================================
