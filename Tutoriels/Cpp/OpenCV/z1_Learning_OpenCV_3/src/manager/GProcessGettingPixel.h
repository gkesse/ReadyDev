//===============================================
#ifndef _GProcessGettingPixel_
#define _GProcessGettingPixel_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessGettingPixel : public GProcess {
public:
    GProcessGettingPixel();
    ~GProcessGettingPixel();

public:
    static GProcessGettingPixel* Instance();
    void run();

private:
    static GProcessGettingPixel* m_instance;
};
//===============================================
#endif
//===============================================
