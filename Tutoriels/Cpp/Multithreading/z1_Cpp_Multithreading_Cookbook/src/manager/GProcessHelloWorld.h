//===============================================
#ifndef _GProcessHelloWorld_
#define _GProcessHelloWorld_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessHelloWorld : public GProcess {
public:
    GProcessHelloWorld();
    ~GProcessHelloWorld();

public:
    static GProcessHelloWorld* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessHelloWorld* m_instance;
};
//===============================================
#endif
//===============================================
