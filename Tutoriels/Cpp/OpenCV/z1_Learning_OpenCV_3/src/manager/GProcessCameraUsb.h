//===============================================
#ifndef _GProcessCameraUsb_
#define _GProcessCameraUsb_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessCameraUsb : public GProcess {
public:
    GProcessCameraUsb();
    ~GProcessCameraUsb();

public:
    static GProcessCameraUsb* Instance();
    void run();

private:
    static GProcessCameraUsb* m_instance;
};
//===============================================
#endif
//===============================================
