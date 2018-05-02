//===============================================
#ifndef _GImage_
#define _GImage_
//================================================
#include "GInclude.h"
//===============================================
class GImage {
public:
    GImage();
    ~GImage();

public:
    static GImage* Instance();
    void loadImage(const char* filename);

private:
    static GImage* m_instance;
    const char* m_windowName;
};
//===============================================
#endif
//===============================================
