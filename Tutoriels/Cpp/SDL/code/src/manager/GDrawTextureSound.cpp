//================================================
#include "GDrawTextureSound.h"
#include "GTexture.h"
#include "GWindow.h"
#include "GSound.h"
//================================================
GDrawTextureSound* GDrawTextureSound::m_instance = 0;
//================================================
GDrawTextureSound::GDrawTextureSound() {

}
//================================================
GDrawTextureSound::~GDrawTextureSound() {

}
//================================================
GDrawTextureSound* GDrawTextureSound::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTextureSound;
    }
    return m_instance;
}
//================================================
void GDrawTextureSound::initDraw() {
    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/animate-alpha.png"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);

    GSoundInfo lSoundInfo[] {
        {"MUSIC", "res/audio/DST_ElectroRock.ogg", "MUSIC"},
        {"END", "", ""}
    };
    GSound::Instance()->loadSound(lSoundInfo);
    GSound::Instance()->playMusic("MUSIC", -1);

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
void GDrawTextureSound::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_RenderCopy(lRenderer, lTexture, &m_srcRect, &m_dstRect);
}
//================================================
void GDrawTextureSound::update() {
    m_srcRect.x = 128 * int(((SDL_GetTicks() / 100) % 6));
}
//================================================
void GDrawTextureSound::clean() {
    GTexture::Instance()->clear();
}
//================================================
