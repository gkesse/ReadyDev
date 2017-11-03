//===============================================
#ifndef _GPoint_
#define _GPoint_
//===============================================
#include "GShape.h"
//===============================================
class GPoint : public GShape {
public:
    GPoint();
    ~GPoint();

public:
    void draw();
    void setX(const int& x);

private:
    int m_x;
    int m_y;
};
//===============================================
#endif
//===============================================
