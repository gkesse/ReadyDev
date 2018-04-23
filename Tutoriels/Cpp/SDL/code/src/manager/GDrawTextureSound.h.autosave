//================================================
#ifndef _GDrawTextureSound_
#define _GDrawTextureSound_
//================================================
#include "GDraw.h"
//================================================
class GDrawTextureSound : public GDraw {
public:
    GDrawTextureSound();
    ~GDrawTextureSound();

public:
    static GDrawTextureSound* Instance();
    void initDraw();
    void draw();
    void update();

private:
    static GDrawTextureSound* m_instance;
    SDL_Rect m_srcRect;
    SDL_Rect m_dstRect;
};
//================================================
#endif
//================================================
