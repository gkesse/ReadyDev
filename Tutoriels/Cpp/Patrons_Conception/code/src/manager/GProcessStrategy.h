//===============================================
#ifndef _GProcessStrategy_
#define _GProcessStrategy_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessStrategy : public GProcess {
public:
    GProcessStrategy();
    ~GProcessStrategy();

public:
    static GProcessStrategy* Instance();
    void run(int argc, char **argv);

private:
    static GProcessStrategy* m_instance;
};
//===============================================
#endif
//===============================================
