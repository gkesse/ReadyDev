//===============================================
#include "GProcessHelloSdlBreaking.h"
//===============================================
GProcessHelloSdlBreaking* GProcessHelloSdlBreaking::m_instance = 0;
//===============================================
GProcessHelloSdlBreaking::GProcessHelloSdlBreaking() {
    g_pWindow = 0;
    g_pRenderer = 0;
    g_bRunning = false;
}
//===============================================
GProcessHelloSdlBreaking::~GProcessHelloSdlBreaking() {

}
//===============================================
GProcessHelloSdlBreaking* GProcessHelloSdlBreaking::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessHelloSdlBreaking;
    }
    return m_instance;
}
//===============================================
void GProcessHelloSdlBreaking::run() {
    cout << "\n### Bonjour SDL Boucle\n\n";
    if(init("SDL | ReadyDev", SDL_WINDOWPOS_CENTERED, SDL_WINDOWPOS_CENTERED, 640, 480, SDL_WINDOW_SHOWN)) {
        g_bRunning = true;
    }
    else {
        return;
    }

    while(g_bRunning) {
        render();
    }

    SDL_Quit();
}
//===============================================
bool GProcessHelloSdlBreaking::init(const char* title, int xpos, int ypos, int height, int width, int flags) {
    if(SDL_Init(SDL_INIT_EVERYTHING) >= 0) {
        g_pWindow = SDL_CreateWindow(title, xpos, ypos, height, width, flags);
        if(g_pWindow != 0) {
            g_pRenderer = SDL_CreateRenderer(g_pWindow, -1, 0);
        }
    }
    else {
        return false;
    }
    return true;
}
//===============================================
void GProcessHelloSdlBreaking::render() {
    SDL_SetRenderDrawColor(g_pRenderer, 0, 0, 0, 255);
    SDL_RenderClear(g_pRenderer);
    SDL_RenderPresent(g_pRenderer);
}
//===============================================
