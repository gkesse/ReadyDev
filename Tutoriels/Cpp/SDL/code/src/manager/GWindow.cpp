//================================================
#include "GWindow.h"
#include "GDraw.h"
#include "GTexture.h"
//================================================
GWindow* GWindow::m_instance = 0;
//================================================
GWindow::GWindow() {
    m_title = "SDL | ReadyDev";
    m_xPos = 0;
    m_yPos = 0;
    m_width = 400;
    m_height = 400;
    m_flags = 0;
    m_running = true;
}
//================================================
GWindow::~GWindow() {

}
//================================================
GWindow* GWindow::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindow;
    }
    return m_instance;
}
//================================================
SDL_Renderer* GWindow::getRenderer() {
    return m_renderer;
}
//================================================
void GWindow::show() {
    SDL_Init(SDL_INIT_EVERYTHING);
    m_window = SDL_CreateWindow(m_title.toStdString().c_str(), m_xPos, m_yPos, m_width, m_height, m_flags);
    setCenter();
    m_renderer = SDL_CreateRenderer(m_window, -1, SDL_RENDERER_ACCELERATED);
    initDraw();
    while(m_running) {
        handleEvents();
        update();
        render();
    }
    clean();
}
//================================================
void GWindow::initDraw() {
    GDraw::Instance()->initDraw();
}
//================================================
void GWindow::setCenter() {
    SDL_DisplayMode lDM;
    SDL_GetCurrentDisplayMode(0, &lDM);
    int lWidth = lDM.w;
    int lHeight = lDM.h;
    m_xPos = (lWidth - m_width) / 2;
    m_yPos = (lHeight - m_height) / 2;
    SDL_SetWindowPosition(m_window, m_xPos, m_yPos);
}
//================================================
void GWindow::clean() {
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
            break;
        }
    }
}
//================================================
void GWindow::update() {

}
//================================================
