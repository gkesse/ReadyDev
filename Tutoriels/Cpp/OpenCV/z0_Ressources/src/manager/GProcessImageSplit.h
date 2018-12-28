//===============================================
#ifndef _GProcessImageSplit_
#define _GProcessImageSplit_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImageSplit : public GProcess {
public:
    GProcessImageSplit();
    ~GProcessImageSplit();

public:
    static GProcessImageSplit* Instance();
    void run(int argc, char** argv);

private:
    static GProcessImageSplit* m_instance;
};
//===============================================
#endif
//===============================================
