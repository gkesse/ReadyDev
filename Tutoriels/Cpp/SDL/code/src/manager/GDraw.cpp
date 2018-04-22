//================================================
#include "GDraw.h"
#include "GTexture.h"
#include "GWindow.h"
//================================================
GDraw* GDraw::m_instance = 0;
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {

}
//================================================
GDraw* GDraw::Instance() {
    if(m_instance == 0) {
        m_instance = new GDraw;
    }
    return m_instance;
}
//================================================
void GDraw::initDraw() {
    GTextureInfo lTextureInfo[] {
        {"ANIMATE", "res/img/animate-alpha.png"},
        {"END"}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);
}
//================================================
void GDraw::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("ANIMATE");

    int lX = 0;
    int lY = 0;
    int lWidth = 128;
    int lHeight = 82;

    SDL_Rect lSrcRect;
    SDL_Rect lDstRect;

    lSrcRect.x = 0;
    lSrcRect.y = 0;
    lSrcRect.w = lWidth;
    lSrcRect.h = lHeight;

    lDstRect.x = lX;
    lDstRect.y = lY;
    lDstRect.w = lWidth;
    lDstRect.h = lHeight;

    SDL_RenderCopyEx(lRenderer, lTexture, &lSrcRect, &lDstRect, 0, 0, SDL_FLIP_NONE);
}
//================================================
