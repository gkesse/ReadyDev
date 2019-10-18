//===============================================
#ifndef _GProcess_
#define _GProcess_
//===============================================
#include "GInclude.h"
//===============================================
class GProcess {
public:
    GProcess();
    virtual ~GProcess();
    static GProcess* Instance();
    void virtual run(int argc, char** argv) = 0;
};
//===============================================
#endif
//===============================================
