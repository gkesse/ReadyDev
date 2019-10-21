//===============================================
#ifndef _GShapeEllipse_
#define _GShapeEllipse_
//===============================================
#include "GShape.h"
//===============================================
class GShapeEllipse : public GShape {
public:
    GShapeEllipse();
    GShapeEllipse(const double& size);
    GShapeEllipse(const double& width, const double& height);
    ~GShapeEllipse();

public:
    double area() const;
    double perimeter() const;

private:
    double m_radiusX;
    double m_radiusY;
};
//===============================================
#endif
//===============================================
