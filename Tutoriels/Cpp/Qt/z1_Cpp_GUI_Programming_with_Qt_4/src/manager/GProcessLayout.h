//===============================================
#ifndef _GProcessLayout_
#define _GProcessLayout_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessLayout : public GProcess {
public:
    GProcessLayout();
    ~GProcessLayout();

public:
    static GProcessLayout* Instance();
    void run();

private:
    static GProcessLayout* m_instance;
};
//===============================================
#endif
//===============================================
