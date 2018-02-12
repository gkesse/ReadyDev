//===============================================
#include "GImage.h"
#include "GImageProxy.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GImage> m_image(new GImageProxy("Design_10MB_Photo1"));
    shared_ptr<GImage> m_image2(new GImageProxy("Design_10MB_Photo2"));
    m_image->displayImage();
    m_image2->displayImage();
    m_image->displayImage();
    m_image2->displayImage();
    return 0;
}
//===============================================
