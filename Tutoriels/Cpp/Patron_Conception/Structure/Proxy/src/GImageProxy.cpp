//===============================================
#include "GImageProxy.h"
#include "GImageReal.h"
//===============================================
GImageProxy::GImageProxy() {
    m_image = 0;
    m_filename = "";
}
//===============================================
GImageProxy::GImageProxy(const string& filename) {
    m_image = 0;
    m_filename = filename;
}
//===============================================
GImageProxy::~GImageProxy() {
    if(m_image != 0) {delete m_image; m_image = 0;}
}
//===============================================
void GImageProxy::displayImage() {
    if(m_image == 0) {
        m_image = new GImageReal(m_filename);
    }
    m_image->displayImage();
}
//===============================================
