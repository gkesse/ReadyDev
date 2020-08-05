//===============================================
#ifndef _GProcessDial_
#define _GProcessDial_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessDial : public GProcess {
public:
    GProcessDial();
    ~GProcessDial();

public:
    static GProcessDial* Instance();
    void run(int argc, char **argv);

private:
    static GProcessDial* m_instance;
};
//===============================================
#endif
//===============================================
