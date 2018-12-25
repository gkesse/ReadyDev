//===============================================
#ifndef _GProcessEdge_
#define _GProcessEdge_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessEdge : public GProcess {
public:
    GProcessEdge();
    ~GProcessEdge();

public:
    static GProcessEdge* Instance();
    void run(int argc, char** argv);

private:
    static GProcessEdge* m_instance;
};
//===============================================
#endif
//===============================================
