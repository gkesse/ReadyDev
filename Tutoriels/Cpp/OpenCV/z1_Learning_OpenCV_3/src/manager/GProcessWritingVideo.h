//===============================================
#ifndef _GProcessWritingVideo_
#define _GProcessWritingVideo_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessWritingVideo : public GProcess {
public:
    GProcessWritingVideo();
    ~GProcessWritingVideo();

public:
    static GProcessWritingVideo* Instance();
    void run();

private:
    static GProcessWritingVideo* m_instance;
};
//===============================================
#endif
//===============================================
