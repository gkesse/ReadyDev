//===============================================
#ifndef _GProcessReadyVision_
#define _GProcessReadyVision_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessReadyVision : public GProcess {
private:
    GProcessReadyVision();

public:
    ~GProcessReadyVision();
    static GProcessReadyVision* Instance();
    void run(int argc, char **argv);

private:
    static GProcessReadyVision* m_instance;
};
//===============================================
#endif
//===============================================
