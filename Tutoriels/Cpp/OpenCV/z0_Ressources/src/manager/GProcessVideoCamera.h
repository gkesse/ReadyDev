//===============================================
#ifndef _GProcessVideoCamera_
#define _GProcessVideoCamera_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessVideoCamera : public GProcess {
public:
    GProcessVideoCamera();
    ~GProcessVideoCamera();

public:
    static GProcessVideoCamera* Instance();
    void run(int argc, char** argv);

private:
    static GProcessVideoCamera* m_instance;
};
//===============================================
#endif
//===============================================
