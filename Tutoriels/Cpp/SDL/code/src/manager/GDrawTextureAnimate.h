//================================================
#ifndef _GDrawTextureAnimate_
#define _GDrawTextureAnimate_
//================================================
#include "GDraw.h"
//================================================
class GDrawTextureAnimate : public GDraw {
public:
    GDrawTextureAnimate();
    ~GDrawTextureAnimate();

public:
    static GDrawTextureAnimate* Instance();
    void initDraw();
    void draw();
    void update();

private:
    static GDrawTextureAnimate* m_instance;
    SDL_Rect m_srcRect;
    SDL_Rect m_dstRect;
};
//================================================
#endif
//================================================
