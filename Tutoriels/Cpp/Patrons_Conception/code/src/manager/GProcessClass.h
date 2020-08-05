//===============================================
#ifndef _GProcessClass_
#define _GProcessClass_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessClass : public GProcess {
public:
    GProcessClass();
    ~GProcessClass();

public:
    static GProcessClass* Instance();
    void run(int argc, char **argv);

private:
    static GProcessClass* m_instance;
};
//===============================================
#endif
//===============================================
