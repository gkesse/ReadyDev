//===============================================
#ifndef _GProcessVideoRead_
#define _GProcessVideoRead_
//================================================
#include "GProcess.h"
//===============================================
class GProcessVideoRead : public GProcess {
public:
    GProcessVideoRead();
    ~GProcessVideoRead();

public:
    static GProcessVideoRead* Instance();
    void run();

private:
    static GProcessVideoRead* m_instance;
};
//===============================================
#endif
//===============================================
