//===============================================
#ifndef _GProcessLine_
#define _GProcessLine_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessLine : public GProcess {
public:
    GProcessLine();
    ~GProcessLine();

public:
    static GProcessLine* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessLine* m_instance;
};
//===============================================
#endif
//===============================================
