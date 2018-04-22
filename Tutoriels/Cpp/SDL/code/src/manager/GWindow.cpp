//================================================
#include "GWindow.h"
#include "GConfig.h"
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
void GWindow::show() {
    SDL_Init(SDL_INIT_EVERYTHING);
    m_window = SDL_CreateWindow(m_title.toStdString().c_str(), m_xPos, m_yPos, m_width, m_height, m_flags);
    setCenter();
    m_renderer = SDL_CreateRenderer(m_window, -1, SDL_RENDERER_ACCELERATED);
    render();
    clean();
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
    SDL_SetRenderDrawColor(m_renderer, 0, 0, 0, 255);
    SDL_RenderClear(m_renderer);
    SDL_RenderPresent(m_renderer);
}
//================================================
