//================================================
#ifndef _GDrawTextureFlip_
#define _GDrawTextureFlip_
//================================================
#include "GDraw.h"
#include "GInclude.h"
//================================================
class GDrawTextureFlip : public GDraw {
public:
    GDrawTextureFlip();
    ~GDrawTextureFlip();

public:
    static GDrawTextureFlip* Instance();
    void initDraw();
    void draw();
    void update();

private:
    static GDrawTextureFlip* m_instance;
    SDL_Rect m_srcRect;
    SDL_Rect m_dstRect;
};
//================================================
#endif
//================================================
