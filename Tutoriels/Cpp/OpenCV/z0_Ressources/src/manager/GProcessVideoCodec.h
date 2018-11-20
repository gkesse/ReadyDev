//===============================================
#ifndef _GProcessVideoCodec_
#define _GProcessVideoCodec_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessVideoCodec : public GProcess {
public:
    GProcessVideoCodec();
    ~GProcessVideoCodec();

public:
    static GProcessVideoCodec* Instance();
    void run(int argc, char** argv);

private:
    static GProcessVideoCodec* m_instance;
};
//===============================================
#endif
//===============================================
