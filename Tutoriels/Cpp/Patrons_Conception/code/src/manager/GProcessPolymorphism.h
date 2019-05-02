//===============================================
#ifndef _GProcessPolymorphism_
#define _GProcessPolymorphism_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPolymorphism : public GProcess {
public:
    GProcessPolymorphism();
    ~GProcessPolymorphism();

public:
    static GProcessPolymorphism* Instance();
    void run(int argc, char **argv);

private:
    static GProcessPolymorphism* m_instance;
};
//===============================================
#endif
//===============================================
