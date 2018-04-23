//================================================
#ifndef _GDrawTextureEventMouse_
#define _GDrawTextureEventMouse_
//================================================
#include "GDraw.h"
#include "GInclude.h"
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
    void handleEvents(SDL_Event *event);
    void onKeyDown(SDL_Keycode keycode);

private:
    static GDrawTextureEventMouse* m_instance;
    SDL_Rect m_srcRect;
    SDL_Rect m_dstRect;
};
//================================================
#endif
//================================================
