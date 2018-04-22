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
    virtual void initDraw() = 0;
    virtual void draw() = 0;
};
//================================================
#endif
//================================================
