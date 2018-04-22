//================================================
#ifndef _GDraw_
#define _GDraw_
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
};
//================================================
#endif
//================================================
