//===============================================
#include "GProcessHelloSdl.h"
//===============================================
GProcessHelloSdl* GProcessHelloSdl::m_instance = 0;
//===============================================
GProcessHelloSdl::GProcessHelloSdl() {
    g_pWindow = 0;
    g_pRenderer = 0;
}
//===============================================
GProcessHelloSdl::~GProcessHelloSdl() {

}
//===============================================
GProcessHelloSdl* GProcessHelloSdl::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessHelloSdl;
    }
    return m_instance;
}
//===============================================
void GProcessHelloSdl::run() {
    cout << "\n### Bonjour SDL\n\n";

    if(SDL_Init(SDL_INIT_EVERYTHING) >= 0) {
        g_pWindow = SDL_CreateWindow("SDL | ReadyDev",
                                     SDL_WINDOWPOS_CENTERED, SDL_WINDOWPOS_CENTERED,
                                     640, 480, SDL_WINDOW_SHOWN);

        if(g_pWindow != 0) {
            g_pRenderer = SDL_CreateRenderer(g_pWindow, -1, 0);
        }
    }
    else {
        return;
    }

    SDL_SetRenderDrawColor(g_pRenderer, 0, 0, 0, 255);
    SDL_RenderClear(g_pRenderer);
    SDL_RenderPresent(g_pRenderer);
    SDL_Delay(5000);
    SDL_Quit();
}
//===============================================
