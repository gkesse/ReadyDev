//===============================================
#ifndef _GProcessHelloSdl_
#define _GProcessHelloSdl_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessHelloSdl : public GProcess {
public:
    GProcessHelloSdl();
    ~GProcessHelloSdl();

public:
    static GProcessHelloSdl* Instance();
    void run();

private:
    static GProcessHelloSdl* m_instance;
    SDL_Window* g_pWindow;
    SDL_Renderer* g_pRenderer;
};
//===============================================
#endif
//===============================================
