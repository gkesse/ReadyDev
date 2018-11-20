//===============================================
#ifndef _GProcessImageBlend_
#define _GProcessImageBlend_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImageBlend : public GProcess {
public:
    GProcessImageBlend();
    ~GProcessImageBlend();

public:
    static GProcessImageBlend* Instance();
    void run(int argc, char** argv);

private:
    static GProcessImageBlend* m_instance;
};
//===============================================
#endif
//===============================================
