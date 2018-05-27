//================================================
#ifndef _GTexture_
#define _GTexture_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//================================================
class GTexture {
public:
    GTexture();
    ~GTexture();

public:
    static GTexture* Instance();
    void loadTexture(GTextureInfo* textureInfo);
    SDL_Texture* getTexture(const QString& id);
    void clear();

private:
    static GTexture* m_instance;
    QMap<QString, SDL_Texture*> m_textureMap;
};
//================================================
#endif
//================================================
