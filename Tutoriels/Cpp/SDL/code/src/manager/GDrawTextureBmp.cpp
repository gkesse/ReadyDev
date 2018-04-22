//================================================
#include "GDrawTextureBmp.h"
#include "GTexture.h"
#include "GWindow.h"
//================================================
GDrawTextureBmp* GDrawTextureBmp::m_instance = 0;
//================================================
GDrawTextureBmp::GDrawTextureBmp() {

}
//================================================
GDrawTextureBmp::~GDrawTextureBmp() {

}
//================================================
GDrawTextureBmp* GDrawTextureBmp::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTextureBmp;
    }
    return m_instance;
}
//================================================
void GDrawTextureBmp::initDraw() {
    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/rider.bmp"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);
}
//================================================
void GDrawTextureBmp::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_Rect lSrcRect;
    SDL_Rect lDstRect;

    SDL_QueryTexture(lTexture, NULL, NULL, &lSrcRect.w, &lSrcRect.h);

    lSrcRect.x = 0;
    lSrcRect.y = 0;

    lDstRect.x = 0;
    lDstRect.y = 0;
    lDstRect.w = lSrcRect.w;
    lDstRect.h = lSrcRect.w;

    SDL_RenderCopyEx(lRenderer, lTexture, &lSrcRect, &lDstRect, 0, 0, SDL_FLIP_NONE);
}
//================================================
