//===============================================
#ifndef _GProcessHello_
#define _GProcessHello_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessHello : public GProcess {
private:
    GProcessHello();

public:
    ~GProcessHello();
    static GProcessHello* Instance();
    void run(int argc, char **argv);

private:
    static GProcessHello* m_instance;
};
//===============================================
#endif
//===============================================
