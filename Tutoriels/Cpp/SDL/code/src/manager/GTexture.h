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
    void setRenderer(SDL_Renderer* renderer);
    void loadTexture(GTextureInfo* textureInfo);

private:
    static GTexture* m_instance;
    SDL_Renderer* m_renderer;
    QMap<QString, SDL_Texture*> m_textureMap;
};
//================================================
#endif
//================================================
