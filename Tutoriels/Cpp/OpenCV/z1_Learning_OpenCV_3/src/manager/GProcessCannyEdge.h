//===============================================
#ifndef _GProcessCannyEdge_
#define _GProcessCannyEdge_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessCannyEdge : public GProcess {
public:
    GProcessCannyEdge();
    ~GProcessCannyEdge();

public:
    static GProcessCannyEdge* Instance();
    void run();

private:
    static GProcessCannyEdge* m_instance;
};
//===============================================
#endif
//===============================================
