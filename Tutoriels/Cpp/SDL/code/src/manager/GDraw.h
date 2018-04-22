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
    void setRenderer(SDL_Renderer* renderer);
    void initDraw();
    void draw();

private:
    static GDraw* m_instance;
    SDL_Renderer* m_renderer;
};
//================================================
#endif
//================================================
