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
    SDL_Texture* getTexture(const QString& id);

private:
    static GSound* m_instance;
    QMap<QString, SDL_Texture*> m_soundMap;
};
//================================================
#endif
//================================================
