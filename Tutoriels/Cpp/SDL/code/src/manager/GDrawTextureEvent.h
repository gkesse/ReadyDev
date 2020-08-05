//================================================
#ifndef _GDrawTextureEvent_
#define _GDrawTextureEvent_
//================================================
#include "GDraw.h"
//================================================
class GDrawTextureEvent : public GDraw {
public:
    GDrawTextureEvent();
    ~GDrawTextureEvent();

public:
    static GDrawTextureEvent* Instance();
    void initDraw();
    void draw();
    void update();
    void onKeyDown(SDL_Event* event);

private:
    static GDrawTextureEvent* m_instance;
    SDL_Rect m_srcRect;
    SDL_Rect m_dstRect;
};
//================================================
#endif
//================================================
