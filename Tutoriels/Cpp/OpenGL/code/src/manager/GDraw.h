//===============================================
#ifndef _GDraw_
#define _GDraw_
//================================================
#include <iostream>
//===============================================
using namespace std;
//===============================================
class GDraw {
public:
    GDraw();
    ~GDraw();

public:
    static GDraw* Instance();
    virtual void initDraw();
    virtual void draw();
    virtual void updateDraw();

private:
    static GDraw* m_instance;
};
//===============================================
#endif
//===============================================
