//===============================================
#ifndef _GProcessDesigner_
#define _GProcessDesigner_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessDesigner : public GProcess {
public:
    GProcessDesigner();
    ~GProcessDesigner();

public:
    static GProcessDesigner* Instance();
    void run();

private:
    static GProcessDesigner* m_instance;
};
//===============================================
#endif
//===============================================
