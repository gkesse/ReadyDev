//===============================================
#ifndef _GProcessTriangle_
#define _GProcessTriangle_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessTriangle : public GProcess {
public:
    GProcessTriangle();
    ~GProcessTriangle();

public:
    static GProcessTriangle* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessTriangle* m_instance;
};
//===============================================
#endif
//===============================================
