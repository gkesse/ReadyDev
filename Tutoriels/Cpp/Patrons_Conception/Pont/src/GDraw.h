//===============================================
#ifndef _GDraw_
#define _GDraw_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GDraw {
public:
    GDraw();
    virtual ~GDraw();
    
public:
    static GDraw* Instance();
    virtual void drawCircle() = 0;
};
//===============================================
#endif
//===============================================
