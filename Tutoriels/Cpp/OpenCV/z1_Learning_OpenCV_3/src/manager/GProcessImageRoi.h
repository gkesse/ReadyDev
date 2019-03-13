//===============================================
#ifndef _GProcessImageRoi_
#define _GProcessImageRoi_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImageRoi : public GProcess {
public:
    GProcessImageRoi();
    ~GProcessImageRoi();

public:
    static GProcessImageRoi* Instance();
    void run();

private:
    static GProcessImageRoi* m_instance;
};
//===============================================
#endif
//===============================================
