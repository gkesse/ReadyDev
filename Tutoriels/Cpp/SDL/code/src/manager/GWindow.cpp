//================================================
#include "GWindow.h"
#include "GWindowNormal.h"
#include "GWindowFullscreen.h"
#include "GDraw.h"
#include "GConfig.h"
//================================================
GWindow* GWindow::m_instance = 0;
//================================================
GWindow::GWindow() {
    m_title = "SDL | ReadyDev";
    m_xPos = SDL_WINDOWPOS_CENTERED;
    m_yPos = SDL_WINDOWPOS_CENTERED;
    m_width = 400;
    m_height = 400;
    m_flags = SDL_WINDOW_SHOWN;
    m_running = true;
}
//================================================
GWindow::~GWindow() {

}
//================================================
GWindow* GWindow::Instance() {
    QString lType = GConfig::Instance()->getData("WINDOW_TYPE");
    if(lType == "NORMAL") return GWindowNormal::Instance();
    if(lType == "FULLSCREEN") return GWindowFullscreen::Instance();
    return 0;
}
//================================================
SDL_Window* GWindow::getWindow() {
    return m_window;
}
//================================================
SDL_Renderer* GWindow::getRenderer() {
    return m_renderer;
}
//================================================
void GWindow::show() {
    setFlags();
    SDL_Init(SDL_INIT_EVERYTHING);
    m_window = SDL_CreateWindow(m_title.toStdString().c_str(), m_xPos, m_yPos, m_width, m_height, m_flags);
    m_renderer = SDL_CreateRenderer(m_window, -1, SDL_RENDERER_ACCELERATED);
    initDraw();
    while(m_running) {
        Uint32 lFrameStart = SDL_GetTicks();

        handleEvents();
        update();
        render();

        Uint32 lFrameTime = SDL_GetTicks() - lFrameStart;

        if (lFrameTime < DELAY_TIME) {
            SDL_Delay((int)(DELAY_TIME - lFrameTime));
        }
    }
    clean();
}
//================================================
void GWindow::setFlags() {}
//================================================
void GWindow::initDraw() {
    GDraw::Instance()->initDraw();
}
//================================================
void GWindow::clean() {
    GDraw::Instance()->clean();
    SDL_DestroyRenderer(m_renderer);
    SDL_DestroyWindow(m_window);
    SDL_Quit();
}
//================================================
void GWindow::render() {
    SDL_RenderClear(m_renderer);
    SDL_SetRenderDrawColor(m_renderer, 5, 16, 57, 255);
    GDraw::Instance()->draw();
    SDL_RenderPresent(m_renderer);
}
//================================================
void GWindow::handleEvents() {
    SDL_Event lEvent;

    if(SDL_PollEvent(&lEvent)){
        switch(lEvent.type){
        case SDL_QUIT:
            m_running = false;
            break;
        default:
            GDraw::Instance()->handleEvents(&lEvent);
            break;
        }
    }
}
//================================================
void GWindow::update() {
    GDraw::Instance()->update();
}
//================================================
