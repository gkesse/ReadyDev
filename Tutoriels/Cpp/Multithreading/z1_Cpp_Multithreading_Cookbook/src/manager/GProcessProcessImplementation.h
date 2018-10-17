//===============================================
#ifndef _GProcessProcessImplementation_
#define _GProcessProcessImplementation_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessProcessImplementation : public GProcess {
public:
    GProcessProcessImplementation();
    ~GProcessProcessImplementation();

public:
    static GProcessProcessImplementation* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessProcessImplementation* m_instance;
};
//===============================================
#endif
//===============================================
