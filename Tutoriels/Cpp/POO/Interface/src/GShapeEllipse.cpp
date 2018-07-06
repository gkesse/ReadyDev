//===============================================
#include "GShapeEllipse.h"
//===============================================
#include <cmath>
//===============================================
//#define M_PI (3.14159265359)
//===============================================
GShapeEllipse::GShapeEllipse() {
    m_radiusX = 0.0;
    m_radiusY = 0.0;
}
//===============================================
GShapeEllipse::GShapeEllipse(const double& size) {
    m_radiusX = size/2.0;
    m_radiusY = size/2.0;
}
//===============================================
GShapeEllipse::GShapeEllipse(const double& width, const double& height) {
    m_radiusX = width/2.0;
    m_radiusY = height/2.0;
}
//===============================================
GShapeEllipse::~GShapeEllipse() {

}
//===============================================
double GShapeEllipse::area() const {
    double lArea = M_PI*m_radiusX*m_radiusY;
    return lArea;
}
//===============================================
double GShapeEllipse::perimeter() const {
    double lT1 = 3*m_radiusX + m_radiusY;
    double lT2 = m_radiusX + 3*m_radiusY;
    double lT3 = sqrt(lT1*lT2);
    double lT4 = 3*(m_radiusX + m_radiusY);
    double lPermiter = M_PI*(lT4 - lT3);
    return lPermiter;
}
//===============================================
