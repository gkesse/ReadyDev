//===============================================
#ifndef _GProcessSmoothingImage_
#define _GProcessSmoothingImage_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSmoothingImage : public GProcess {
public:
    GProcessSmoothingImage();
    ~GProcessSmoothingImage();

public:
    static GProcessSmoothingImage* Instance();
    void run();

private:
    static GProcessSmoothingImage* m_instance;
};
//===============================================
#endif
//===============================================
