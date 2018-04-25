//===============================================
#include "GTexture.h"
//===============================================
GTexture* GTexture::m_instance = 0;
//===============================================
GTexture::GTexture() {

}
//===============================================
GTexture::~GTexture() {

}
//===============================================
GTexture* GTexture::Instance() {
    if(m_instance == 0) {
        m_instance = new GTexture;
    }
    return m_instance;
}
//===============================================
void GTexture::loadTexture(const char* filename) {

}
//===============================================
