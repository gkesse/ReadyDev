//================================================
#include "GTexture.h"
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
void GTexture::loadTexture() {
    SDL_Surface* pTempSurface = IMG_Load(fileName.c_str());
    if(pTempSurface == NULL){
        return false;
    }

    SDL_Texture* pTexture = SDL_CreateTextureFromSurface(pRenderer, pTempSurface);

    SDL_FreeSurface(pTempSurface);

    if(pTexture != NULL){
        m_textureMap[id] = pTexture;
        return true;
    }
}
//================================================
