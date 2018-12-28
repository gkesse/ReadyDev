//===============================================
#ifndef _GProcessVideoWrite_
#define _GProcessVideoWrite_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessVideoWrite : public GProcess {
public:
    GProcessVideoWrite();
    ~GProcessVideoWrite();

public:
    static GProcessVideoWrite* Instance();
    void run(int argc, char** argv);

private:
    static GProcessVideoWrite* m_instance;
};
//===============================================
#endif
//===============================================
