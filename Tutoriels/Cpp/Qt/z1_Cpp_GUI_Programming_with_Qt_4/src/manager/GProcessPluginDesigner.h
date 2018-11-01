//===============================================
#ifndef _GProcessPluginDesigner_
#define _GProcessPluginDesigner_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPluginDesigner : public GProcess {
public:
    GProcessPluginDesigner();
    ~GProcessPluginDesigner();

public:
    static GProcessPluginDesigner* Instance();
    void run();

private:
    static GProcessPluginDesigner* m_instance;
};
//===============================================
#endif
//===============================================
