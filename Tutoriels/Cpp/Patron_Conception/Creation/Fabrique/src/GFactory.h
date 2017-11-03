//===============================================
#ifndef _GFactory_
#define _GFactory_
//===============================================
#include "GShape.h"
//===============================================
class GFactory {
public:
    enum GShapeType {Point, Line, Rectangle, Ellipse};

public:
    static GShape* CreateShape(const GShapeType& type);
    static GShape* CreateShape(const int& type);
};
//===============================================
#endif
//===============================================
