//================================================
#include "GSound.h"
#include "GWindow.h"
//================================================
GSound* GSound::m_instance = 0;
//================================================
GSound::GSound() {

}
//================================================
GSound::~GSound() {

}
//================================================
GSound* GSound::Instance() {
    if(m_instance == 0) {
        m_instance = new GSound;
    }
    return m_instance;
}
//================================================
void GSound::loadSound(GSoundInfo* soundInfo) {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    GSoundInfo* lSourceInfo = soundInfo;
    while(1) {
        if(QString(lSourceInfo->id) == "END") break;
        Mix_Music* lMusic = Mix_LoadMUS(lSourceInfo->filename);
        Mix_Chunk* lChunk = Mix_LoadWAV(lSourceInfo->filename);
        lSourceInfo++;
    }
}
//================================================
SDL_Texture* GSound::getTexture(const QString& id) {
    return m_textureMap[id];
}
//================================================
