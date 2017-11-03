//===============================================
#ifndef _GShape_
#define _GShape_
//===============================================
#include <iostream>
#include <vector>
#include <map>
#include <string>
#include "GTypeDef.h"
//===============================================
using namespace std;
//===============================================
class GShape {
public:
    GShape();
    virtual ~GShape();
    virtual void setPoint(const double& x, const double& y);
    virtual void setLine(const double& x1, const double& y1, const double& x2, const double& y2);
    virtual void setRect(const double& x, const double& y, const double& w, const double& h);

public:
    virtual void draw() = 0;

protected:
    GPoint2D m_pt;
    GPoint2D m_pt1;
    GPoint2D m_pt2;
    GRect m_rect;
};
//===============================================
#endif
//===============================================
