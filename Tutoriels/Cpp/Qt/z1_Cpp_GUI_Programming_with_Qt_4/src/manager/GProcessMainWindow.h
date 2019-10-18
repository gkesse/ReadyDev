//===============================================
#ifndef _GProcessMainWindow_
#define _GProcessMainWindow_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessMainWindow : public GProcess {
public:
    GProcessMainWindow();
    ~GProcessMainWindow();

public:
    static GProcessMainWindow* Instance();
    void run();

private:
    static GProcessMainWindow* m_instance;
};
//===============================================
#endif
//===============================================
