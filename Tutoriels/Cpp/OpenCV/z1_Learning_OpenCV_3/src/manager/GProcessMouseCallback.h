//===============================================
#ifndef _GProcessMouseCallback_
#define _GProcessMouseCallback_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessMouseCallback : public GProcess {
public:
    GProcessMouseCallback();
    ~GProcessMouseCallback();

public:
    static GProcessMouseCallback* Instance();
    static void onMouse(int event, int x, int y, int flags, void* params);
    void run();

private:
    static GProcessMouseCallback* m_instance;
    static int m_mouseState;
};
//===============================================
#endif
//===============================================
