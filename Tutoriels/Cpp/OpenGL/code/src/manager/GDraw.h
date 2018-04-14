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
    virtual void setVertices() = 0;
    virtual void draw() = 0;

private:
    static GDraw* m_instance;
};
//===============================================
#endif
//===============================================
