//================================================
#ifndef _GDraw_
#define _GDraw_
//================================================
#include "GInclude.h"
//================================================
class GDraw {
public:
    GDraw();
    ~GDraw();

public:
    static GDraw* Instance();
    virtual void initDraw();
    virtual void draw();
    virtual void update();
    virtual void handleEvents(SDL_Event* event);
    virtual void onKeyDown(SDL_Keycode keycode);
};
//================================================
#endif
//================================================
