//===============================================
#ifndef _GShapeRectangle_
#define _GShapeRectangle_
//===============================================
#include "GShape.h"
//===============================================
class GShapeRectangle : public GShape {
public:
    GShapeRectangle();
    GShapeRectangle(const double& size);
    GShapeRectangle(const double& width, const double& height);
    ~GShapeRectangle();

public:
    double area() const;
    double perimeter() const;

private:
    double m_width;
    double m_height;
};
//===============================================
#endif
//===============================================
