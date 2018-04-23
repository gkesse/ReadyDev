//================================================
#include "GDrawTexture.h"
#include "GTexture.h"
#include "GWindow.h"
//================================================
GDrawTexture* GDrawTexture::m_instance = 0;
//================================================
GDrawTexture::GDrawTexture() {

}
//================================================
GDrawTexture::~GDrawTexture() {

}
//================================================
GDrawTexture* GDrawTexture::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTexture;
    }
    return m_instance;
}
//================================================
void GDrawTexture::initDraw() {
    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/animate-alpha.png"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);
}
//================================================
void GDrawTexture::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_Rect lSrcRect;
    SDL_Rect lDstRect;

    lSrcRect.x = 0;
    lSrcRect.y = 0;
    lSrcRect.w = 128;
    lSrcRect.h = 0;

    lDstRect.x = 0;
    lDstRect.y = 0;
    lDstRect.w = 128;
    lDstRect.h = 82;

    SDL_RenderCopyEx(lRenderer, lTexture, &lSrcRect, &lDstRect, 0, 0, SDL_FLIP_NONE);
}
//================================================
