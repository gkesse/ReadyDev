//===============================================
#ifndef _GProcessConfigurationOptionsLong_
#define _GProcessConfigurationOptionsLong_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessConfigurationOptionsLong : public GProcess {
public:
    GProcessConfigurationOptionsLong();
    ~GProcessConfigurationOptionsLong();

public:
    static GProcessConfigurationOptionsLong* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessConfigurationOptionsLong* m_instance;
};
//===============================================
#endif
//===============================================
