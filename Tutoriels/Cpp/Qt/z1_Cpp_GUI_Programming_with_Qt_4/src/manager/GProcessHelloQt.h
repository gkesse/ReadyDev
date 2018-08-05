//===============================================
#ifndef _GProcessHelloQt_
#define _GProcessHelloQt_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessHelloQt : public GProcess {
public:
    GProcessHelloQt();
    ~GProcessHelloQt();

public:
    static GProcessHelloQt* Instance();
    void run();

private:
    static GProcessHelloQt* m_instance;
};
//===============================================
#endif
//===============================================
