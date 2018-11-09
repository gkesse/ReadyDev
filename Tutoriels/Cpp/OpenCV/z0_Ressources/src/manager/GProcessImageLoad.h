//===============================================
#ifndef _GProcessImageLoad_
#define _GProcessImageLoad_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImageLoad : public GProcess {
public:
    GProcessImageLoad();
    ~GProcessImageLoad();

public:
    static GProcessImageLoad* Instance();
    void run();

private:
    static GProcessImageLoad* m_instance;
};
//===============================================
#endif
//===============================================
