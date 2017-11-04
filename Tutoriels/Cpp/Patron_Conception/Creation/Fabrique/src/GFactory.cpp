//===============================================
#include "GFactory.h"
#include "GPoint.h"
#include "GLine.h"
#include "GRectangle.h"
#include "GEllipse.h"
//===============================================
GShape* GFactory::CreateShape(const GShapeType& type) {
    switch(type) {
    case Point: {return new GPoint; break;}
    case Line: {return new GLine; break;}
    case Rectangle: {return new GRectangle; break;}
    case Ellipse: {return new GEllipse; break;}
    }
    return 0;
}
//===============================================
GShape* GFactory::CreateShape(const int& type) {
    return CreateShape((GShapeType)type);
}
//===============================================
