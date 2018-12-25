//===============================================
#ifndef _GProcessImageThreshold_
#define _GProcessImageThreshold_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImageThreshold : public GProcess {
public:
    GProcessImageThreshold();
    ~GProcessImageThreshold();

public:
    static GProcessImageThreshold* Instance();
    void run(int argc, char** argv);

private:
    static GProcessImageThreshold* m_instance;
};
//===============================================
#endif
//===============================================
