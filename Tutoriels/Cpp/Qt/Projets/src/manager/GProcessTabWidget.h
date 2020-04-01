//===============================================
#ifndef _GProcessTabWidget_
#define _GProcessTabWidget_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessTabWidget : public GProcess {
public:
    GProcessTabWidget();
    ~GProcessTabWidget();

public:
    static GProcessTabWidget* Instance();
    void run(int argc, char **argv);

private:
    static GProcessTabWidget* m_instance;
};
//===============================================
#endif
//===============================================
