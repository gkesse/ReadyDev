//===============================================
#ifndef _GProcessImageAccumulate_
#define _GProcessImageAccumulate_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImageAccumulate : public GProcess {
public:
    GProcessImageAccumulate();
    ~GProcessImageAccumulate();

public:
    static GProcessImageAccumulate* Instance();
    void run(int argc, char** argv);

private:
    static GProcessImageAccumulate* m_instance;
};
//===============================================
#endif
//===============================================
