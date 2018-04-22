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

private:
    static GDrawAnimate* m_instance;
};
//================================================
#endif
//================================================
