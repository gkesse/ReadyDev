//===============================================
#ifndef _GProcessGrid_
#define _GProcessGrid_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessGrid : public GProcess {
public:
    GProcessGrid();
    ~GProcessGrid();

public:
    static GProcessGrid* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessGrid* m_instance;
};
//===============================================
#endif
//===============================================
