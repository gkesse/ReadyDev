//===============================================
#ifndef _GProcessPixel_
#define _GProcessPixel_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPixel : public GProcess {
public:
    GProcessPixel();
    ~GProcessPixel();

public:
    static GProcessPixel* Instance();
    void run(int argc, char** argv);

private:
    static GProcessPixel* m_instance;
};
//===============================================
#endif
//===============================================
