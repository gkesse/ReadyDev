//================================================
#include "GDrawAnimate.h"
#include "GTexture.h"
#include "GWindow.h"
//================================================
GDrawAnimate* GDrawAnimate::m_instance = 0;
//================================================
GDrawAnimate::GDrawAnimate() {

}
//================================================
GDrawAnimate::~GDrawAnimate() {

}
//================================================
GDrawAnimate* GDrawAnimate::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawAnimate;
    }
    return m_instance;
}
//================================================
void GDrawAnimate::initDraw() {
    SDL_Window* lWindow = GWindow::Instance()->getWindow();

    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/animate-alpha.png"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);

    int lWidth;
    int lHeight;
    SDL_GetWindowSize(lWindow, &lWidth, &lHeight);

    m_srcRect.x = 0;
    m_srcRect.y = 0;
    m_srcRect.w = 128;
    m_srcRect.h = 82;

    m_dstRect.x = 0;
    m_dstRect.y = 0;
    m_dstRect.w = 128;
    m_dstRect.h = 82;

    m_dstRect2.x = lWidth - 128;
    m_dstRect2.y = 100;
    m_dstRect2.w = 128;
    m_dstRect2.h = 82;
}
//================================================
void GDrawAnimate::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_RenderCopy(lRenderer, lTexture, &m_srcRect, &m_dstRect);
    SDL_RenderCopyEx(lRenderer, lTexture, &m_srcRect, &m_dstRect2, 0, 0, SDL_FLIP_HORIZONTAL);
}
//================================================
void GDrawAnimate::update() {
    m_srcRect.x = 128 * int(((SDL_GetTicks() / 100) % 6));
}
//================================================
