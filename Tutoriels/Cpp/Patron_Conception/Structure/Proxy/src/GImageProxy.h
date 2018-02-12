//===============================================
#ifndef _GImageProxy_
#define _GImageProxy_
//===============================================
#include "GImage.h"
//===============================================
class GImageProxy : public GImage {
public:
    GImageProxy();
    GImageProxy(const string& filename);
    ~GImageProxy();

public:
    void displayImage();

private:
    GImage* m_image;
    string m_filename;
};
//===============================================
#endif
//===============================================
