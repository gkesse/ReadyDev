//===============================================
#ifndef _GProcessWindow_
#define _GProcessWindow_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessWindow : public GProcess {
public:
    GProcessWindow();
    ~GProcessWindow();

public:
    static GProcessWindow* Instance();
    void run();

private:
    static GProcessWindow* m_instance;
};
//===============================================
#endif
//===============================================
