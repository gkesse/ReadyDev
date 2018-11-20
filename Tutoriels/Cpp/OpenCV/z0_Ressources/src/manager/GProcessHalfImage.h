//===============================================
#ifndef _GProcessHalfImage_
#define _GProcessHalfImage_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessHalfImage : public GProcess {
public:
    GProcessHalfImage();
    ~GProcessHalfImage();

public:
    static GProcessHalfImage* Instance();
    void run(int argc, char** argv);

private:
    static GProcessHalfImage* m_instance;
};
//===============================================
#endif
//===============================================
