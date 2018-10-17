//===============================================
#ifndef _GProcessConfigurationOptionsShort_
#define _GProcessConfigurationOptionsShort_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessConfigurationOptionsShort : public GProcess {
public:
    GProcessConfigurationOptionsShort();
    ~GProcessConfigurationOptionsShort();

public:
    static GProcessConfigurationOptionsShort* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessConfigurationOptionsShort* m_instance;
};
//===============================================
#endif
//===============================================
