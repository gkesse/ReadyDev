//================================================
#include "GDrawTextureAnimate.h"
#include "GTexture.h"
#include "GWindow.h"
//================================================
GDrawTextureAnimate* GDrawTextureAnimate::m_instance = 0;
//================================================
GDrawTextureAnimate::GDrawTextureAnimate() {

}
//================================================
GDrawTextureAnimate::~GDrawTextureAnimate() {

}
//================================================
GDrawTextureAnimate* GDrawTextureAnimate::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTextureAnimate;
    }
    return m_instance;
}
//================================================
void GDrawTextureAnimate::initDraw() {
    SDL_Window* lWindow = GWindow::Instance()->getWindow();

    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/animate-alpha.png"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);

    m_srcRect.x = 0;
    m_srcRect.y = 0;
    m_srcRect.w = 128;
    m_srcRect.h = 82;

    m_dstRect.x = 0;
    m_dstRect.y = 0;
    m_dstRect.w = 128;
    m_dstRect.h = 82;
}
//================================================
void GDrawTextureAnimate::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_RenderCopy(lRenderer, lTexture, &m_srcRect, &m_dstRect);
}
//================================================
void GDrawTextureAnimate::update() {
    m_srcRect.x = 128 * int(((SDL_GetTicks() / 100) % 6));
}
//================================================
