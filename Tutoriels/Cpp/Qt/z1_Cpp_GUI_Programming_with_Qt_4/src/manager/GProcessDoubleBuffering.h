//===============================================
#ifndef _GProcessDoubleBuffering_
#define _GProcessDoubleBuffering_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessDoubleBuffering : public GProcess {
public:
    GProcessDoubleBuffering();
    ~GProcessDoubleBuffering();

public:
    static GProcessDoubleBuffering* Instance();
    void run();

private:
    static GProcessDoubleBuffering* m_instance;
};
//===============================================
#endif
//===============================================
