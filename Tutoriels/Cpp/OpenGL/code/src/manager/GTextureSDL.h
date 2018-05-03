//===============================================
#ifndef _GTextureSDL_
#define _GTextureSDL_
//================================================
#include "GTexture.h"
//===============================================
class GTextureSDL : public GTexture {
public:
    GTextureSDL();
    ~GTextureSDL();

public:
    static GTextureSDL* Instance();
    SDL_Surface* flipVertical(SDL_Surface* srcImg);
    GLuint loadTexture(const char* filename);

private:
    static GTextureSDL* m_instance;
};
//===============================================
#endif
//===============================================
