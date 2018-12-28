//===============================================
#ifndef _GProcessPyramid_
#define _GProcessPyramid_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPyramid : public GProcess {
public:
    GProcessPyramid();
    ~GProcessPyramid();

public:
    static GProcessPyramid* Instance();
    void run(int argc, char** argv);

private:
    static GProcessPyramid* m_instance;
};
//===============================================
#endif
//===============================================
