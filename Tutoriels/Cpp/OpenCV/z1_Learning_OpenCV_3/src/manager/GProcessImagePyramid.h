//===============================================
#ifndef _GProcessImagePyramid_
#define _GProcessImagePyramid_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImagePyramid : public GProcess {
public:
    GProcessImagePyramid();
    ~GProcessImagePyramid();

public:
    static GProcessImagePyramid* Instance();
    void run();

private:
    static GProcessImagePyramid* m_instance;
};
//===============================================
#endif
//===============================================
