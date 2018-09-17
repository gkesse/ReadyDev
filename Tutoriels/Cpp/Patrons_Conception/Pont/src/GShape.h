//===============================================
#ifndef _GShape_
#define _GShape_
//===============================================
#include "GDraw.h"
//===============================================
class GShape {
public:
    GShape();
    virtual ~GShape();
    
public:
    static GShape* Instance();
    void setDraw(GDraw* draw);
    virtual void draw() = 0;
    
protected:
    GDraw* m_draw;
};
//===============================================
#endif
//===============================================
