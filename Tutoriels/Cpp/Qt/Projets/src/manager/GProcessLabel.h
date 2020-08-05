//===============================================
#ifndef _GProcessLabel_
#define _GProcessLabel_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessLabel : public GProcess {
public:
    GProcessLabel();
    ~GProcessLabel();

public:
    static GProcessLabel* Instance();
    void run(int argc, char **argv);

private:
    static GProcessLabel* m_instance;
};
//===============================================
#endif
//===============================================
