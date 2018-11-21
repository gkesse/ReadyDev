//===============================================
#ifndef _GProcessImageEqualize_
#define _GProcessImageEqualize_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessImageEqualize : public GProcess {
public:
    GProcessImageEqualize();
    ~GProcessImageEqualize();

public:
    static GProcessImageEqualize* Instance();
    void run(int argc, char** argv);

private:
    static GProcessImageEqualize* m_instance;
};
//===============================================
#endif
//===============================================
