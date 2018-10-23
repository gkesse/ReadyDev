//===============================================
#ifndef _GProcessHelloSdlBreaking_
#define _GProcessHelloSdlBreaking_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessHelloSdlBreaking : public GProcess {
public:
    GProcessHelloSdlBreaking();
    ~GProcessHelloSdlBreaking();

public:
    static GProcessHelloSdlBreaking* Instance();
    void run();
    bool init(const char* title, int xpos, int ypos, int height, int width, int flags);
    void render();

private:
    static GProcessHelloSdlBreaking* m_instance;
    SDL_Window* g_pWindow;
    SDL_Renderer* g_pRenderer;
    bool g_bRunning;
};
//===============================================
#endif
//===============================================
