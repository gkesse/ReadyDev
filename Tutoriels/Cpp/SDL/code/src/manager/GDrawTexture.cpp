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
        {"TEXTURE", "res/img/rider.bmp"},
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
    int lWidth;
    int lHeight;

    SDL_QueryTexture(lTexture, NULL, NULL, &lWidth, &lHeight);

    lSrcRect.x = 0;
    lSrcRect.y = 0;
    lSrcRect.w = lWidth;
    lSrcRect.h = lHeight;

    lDstRect.x = 0;
    lDstRect.y = 0;
    lDstRect.w = lSrcRect.w;
    lDstRect.h = lSrcRect.h;

    SDL_RenderCopy(lRenderer, lTexture, &lSrcRect, &lDstRect);
}
//================================================
