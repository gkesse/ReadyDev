//===============================================
#ifndef _GProcessSettingPixel_
#define _GProcessSettingPixel_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSettingPixel : public GProcess {
public:
    GProcessSettingPixel();
    ~GProcessSettingPixel();

public:
    static GProcessSettingPixel* Instance();
    void run();

private:
    static GProcessSettingPixel* m_instance;
};
//===============================================
#endif
//===============================================
