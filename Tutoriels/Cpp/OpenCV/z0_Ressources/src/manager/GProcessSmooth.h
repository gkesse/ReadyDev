//===============================================
#ifndef _GProcessSmooth_
#define _GProcessSmooth_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSmooth : public GProcess {
public:
    GProcessSmooth();
    ~GProcessSmooth();

public:
    static GProcessSmooth* Instance();
    void run(int argc, char** argv);

private:
    static GProcessSmooth* m_instance;
};
//===============================================
#endif
//===============================================
