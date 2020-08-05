//===============================================
#ifndef _GProcess_
#define _GProcess_
//================================================
#include "GInclude.h"
//===============================================
class GProcess {
public:
    GProcess();
    virtual ~GProcess();

public:
    static GProcess* Instance();
    virtual void run() = 0;
};
//===============================================
#endif
//===============================================
