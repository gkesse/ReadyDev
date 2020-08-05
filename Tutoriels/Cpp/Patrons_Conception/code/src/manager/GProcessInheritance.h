//===============================================
#ifndef _GProcessInheritance_
#define _GProcessInheritance_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessInheritance : public GProcess {
public:
    GProcessInheritance();
    ~GProcessInheritance();

public:
    static GProcessInheritance* Instance();
    void run(int argc, char **argv);

private:
    static GProcessInheritance* m_instance;
};
//===============================================
#endif
//===============================================
