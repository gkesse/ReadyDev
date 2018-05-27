//================================================
#ifndef _GDrawTextureEventMouse_
#define _GDrawTextureEventMouse_
//================================================
#include "GDraw.h"
//================================================
class GDrawTextureEventMouse : public GDraw {
public:
    GDrawTextureEventMouse();
    ~GDrawTextureEventMouse();

public:
    static GDrawTextureEventMouse* Instance();
    void initDraw();
    void draw();
    void update();
    void onMouseMotion(SDL_Event* event);
    void onMouseButtonDown(SDL_Event* event);
    void onMouseWheel(SDL_Event* event);

private:
    static GDrawTextureEventMouse* m_instance;
    SDL_RendererFlip m_flip;
    SDL_Rect m_srcRect;
    SDL_Rect m_dstRect;
};
//================================================
#endif
//================================================
