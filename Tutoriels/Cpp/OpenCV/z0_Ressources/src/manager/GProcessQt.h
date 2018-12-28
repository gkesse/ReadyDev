//===============================================
#ifndef _GProcessQt_
#define _GProcessQt_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessQt : public GProcess {
public:
    GProcessQt();
    ~GProcessQt();

public:
    static GProcessQt* Instance();
    void run(int argc, char** argv);

private:
    static GProcessQt* m_instance;
};
//===============================================
#endif
//===============================================
