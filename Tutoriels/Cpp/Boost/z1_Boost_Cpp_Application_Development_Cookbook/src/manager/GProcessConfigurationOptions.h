//===============================================
#ifndef _GProcessConfigurationOptions_
#define _GProcessConfigurationOptions_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessConfigurationOptions : public GProcess {
public:
    GProcessConfigurationOptions();
    ~GProcessConfigurationOptions();

public:
    static GProcessConfigurationOptions* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessConfigurationOptions* m_instance;
};
//===============================================
#endif
//===============================================
