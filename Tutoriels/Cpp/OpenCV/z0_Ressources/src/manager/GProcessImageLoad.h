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
    void run(int argc, char** argv);

private:
    static GProcessImageLoad* m_instance;
};
//===============================================
#endif
//===============================================
