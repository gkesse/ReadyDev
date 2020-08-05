//================================================
#include "GSound.h"
//================================================
GSound* GSound::m_instance = 0;
//================================================
GSound::GSound() {
    Mix_OpenAudio(22050, AUDIO_S16, 2, (4096 / 2));
}
//================================================
GSound::~GSound() {
    Mix_CloseAudio();
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
    GSoundInfo* lSoundInfo = soundInfo;
    while(1) {
        if(QString(lSoundInfo->id) == "END") break;
        if(QString(lSoundInfo->type) == "MUSIC") {
            Mix_Music* lMusic = Mix_LoadMUS(lSoundInfo->filename);
            m_musicMap[QString(lSoundInfo->id)] = lMusic;
        }
        else if(QString(lSoundInfo->type) == "CHUNK") {
            Mix_Chunk* lChunk = Mix_LoadWAV(lSoundInfo->filename);
            m_chunkMap[QString(lSoundInfo->id)] = lChunk;
        }
        lSoundInfo++;
    }
}
//================================================
void GSound::playMusic(const QString& id, const int& loop) {
    Mix_PlayMusic(m_musicMap[id], loop);
}
//================================================
void GSound::playChunk(const QString& id, const int& loop) {
    Mix_PlayChannel(-1, m_chunkMap[id], loop);
}
//================================================
