//================================================
#include "GTexture.h"
#include "GWindow.h"
//================================================
GTexture* GTexture::m_instance = 0;
//================================================
GTexture::GTexture() {

}
//================================================
GTexture::~GTexture() {

}
//================================================
GTexture* GTexture::Instance() {
    if(m_instance == 0) {
        m_instance = new GTexture;
    }
    return m_instance;
}
//================================================
void GTexture::loadTexture(GTextureInfo* textureInfo) {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    GTextureInfo* lTextureInfo = textureInfo;
    while(1) {
        if(QString(lTextureInfo->id) == "END") break;
        SDL_Surface* lSurface = IMG_Load(lTextureInfo->filename);
        SDL_Texture* lTexture = SDL_CreateTextureFromSurface(lRenderer, lSurface);
        m_textureMap[QString(lTextureInfo->id)] = lTexture;
        SDL_FreeSurface(lSurface);
        lTextureInfo++;
    }
}
//================================================
SDL_Texture* GTexture::getTexture(const QString& id) {
    return m_textureMap[id];
}
//================================================
