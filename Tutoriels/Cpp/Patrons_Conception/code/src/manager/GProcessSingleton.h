//===============================================
#ifndef _GProcessSingleton_
#define _GProcessSingleton_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSingleton : public GProcess {
public:
    GProcessSingleton();
    ~GProcessSingleton();

public:
    static GProcessSingleton* Instance();
    void run(int argc, char **argv);

private:
    static GProcessSingleton* m_instance;
};
//===============================================
#endif
//===============================================
