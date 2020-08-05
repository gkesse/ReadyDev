//===============================================
#ifndef _GProcessSplashScreen_
#define _GProcessSplashScreen_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSplashScreen : public GProcess {
public:
    GProcessSplashScreen();
    ~GProcessSplashScreen();

public:
    static GProcessSplashScreen* Instance();
    void run();
    void loadModules();
    void establishConnections();

private:
    static GProcessSplashScreen* m_instance;
};
//===============================================
#endif
//===============================================
