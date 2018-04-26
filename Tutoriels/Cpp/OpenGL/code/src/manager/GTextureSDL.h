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
    GLuint loadTexture(const char* filename);

private:
    static GTextureSDL* m_instance;
};
//===============================================
#endif
//===============================================
