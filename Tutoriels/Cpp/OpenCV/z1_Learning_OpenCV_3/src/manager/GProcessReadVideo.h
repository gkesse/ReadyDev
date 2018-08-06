//===============================================
#ifndef _GProcessReadVideo_
#define _GProcessReadVideo_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessReadVideo : public GProcess {
public:
    GProcessReadVideo();
    ~GProcessReadVideo();

public:
    static GProcessReadVideo* Instance();
    void run();

private:
    static GProcessReadVideo* m_instance;
};
//===============================================
#endif
//===============================================
