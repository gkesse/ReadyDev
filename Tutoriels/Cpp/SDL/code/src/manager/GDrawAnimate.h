//================================================
#ifndef _GDrawAnimate_
#define _GDrawAnimate_
//================================================
#include "GDraw.h"
#include "GInclude.h"
//================================================
class GDrawAnimate : public GDraw {
public:
    GDrawAnimate();
    ~GDrawAnimate();

public:
    static GDrawAnimate* Instance();
    void initDraw();
    void draw();
    void update();

private:
    static GDrawAnimate* m_instance;
    SDL_Rect m_srcRect;
    SDL_Rect m_dstRect;
    SDL_Rect m_srcRect2;
    SDL_Rect m_dstRect2;
};
//================================================
#endif
//================================================
