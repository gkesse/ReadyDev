//===============================================
#ifndef _GProcessVideoPlay_
#define _GProcessVideoPlay_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessVideoPlay : public GProcess {
public:
    GProcessVideoPlay();
    ~GProcessVideoPlay();

public:
    static GProcessVideoPlay* Instance();
    void run(int argc, char** argv);

private:
    static GProcessVideoPlay* m_instance;
};
//===============================================
#endif
//===============================================