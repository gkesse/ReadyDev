//================================================
#include "GDrawTextureReduceMove.h"
#include "GTexture.h"
#include "GWindow.h"
//================================================
GDrawTextureReduceMove* GDrawTextureReduceMove::m_instance = 0;
//================================================
GDrawTextureReduceMove::GDrawTextureReduceMove() {

}
//================================================
GDrawTextureReduceMove::~GDrawTextureReduceMove() {

}
//================================================
GDrawTextureReduceMove* GDrawTextureReduceMove::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTextureReduceMove;
    }
    return m_instance;
}
//================================================
void GDrawTextureReduceMove::initDraw() {
    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/rider.bmp"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);
}
//================================================
void GDrawTextureReduceMove::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_Rect lSrcRect;
    SDL_Rect lDstRect;
    int lWidth;
    int lHeight;

    SDL_QueryTexture(lTexture, NULL, NULL, &lWidth, &lHeight);

    lSrcRect.x = 0;
    lSrcRect.y = 0;
    lSrcRect.w = lWidth / 2;
    lSrcRect.h = lHeight / 2;

    lDstRect.x = 100;
    lDstRect.y = 100;
    lDstRect.w = lSrcRect.w;
    lDstRect.h = lSrcRect.h;

    SDL_RenderCopy(lRenderer, lTexture, &lSrcRect, &lDstRect);
}
//================================================
