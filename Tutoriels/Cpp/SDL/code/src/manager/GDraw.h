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
    void handleEvents(SDL_Event* event);
    virtual void initDraw();
    virtual void draw();
    virtual void update();
    virtual void onKeyDown(SDL_Event* event);
    virtual void onMouseMotion(SDL_Event* event);
    virtual void onMouseButtonDown(SDL_Event* event);
    virtual void onMouseWheel(SDL_Event* event);
};
//================================================
#endif
//================================================
