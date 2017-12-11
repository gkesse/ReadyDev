//===============================================
#ifndef _GImageReal_
#define _GImageReal_
//===============================================
#include "GImage.h"
//===============================================
class GImageReal : public GImage {
public:
    GImageReal();
    GImageReal(const string& filename);
    ~GImageReal();

public:
    void loadImage();
    void displayImage();

private:
    string m_filename;
};
//===============================================
#endif
//===============================================
