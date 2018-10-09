//===============================================
#ifndef _GProcessProcessModel_
#define _GProcessProcessModel_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessProcessModel : public GProcess {
public:
    GProcessProcessModel();
    ~GProcessProcessModel();

public:
    static GProcessProcessModel* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessProcessModel* m_instance;
};
//===============================================
#endif
//===============================================
