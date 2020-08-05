//================================================
#ifndef _GSound_
#define _GSound_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//================================================
class GSound {
public:
    GSound();
    ~GSound();

public:
    static GSound* Instance();
    void loadSound(GSoundInfo* soundInfo);
    void playMusic(const QString& id, const int& loop);
    void playChunk(const QString& id, const int& loop);

private:
    static GSound* m_instance;
    QMap<QString, Mix_Music*> m_musicMap;
    QMap<QString, Mix_Chunk*> m_chunkMap;
};
//================================================
#endif
//================================================
