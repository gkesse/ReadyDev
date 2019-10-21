//===============================================
#ifndef _GProcessConfig_
#define _GProcessConfig_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessConfig : public GProcess {
private:
    GProcessConfig();

public:
    ~GProcessConfig();
    static GProcessConfig* Instance();
    void run(int argc, char **argv);

private:
    static GProcessConfig* m_instance;
};
//===============================================
#endif
//===============================================
