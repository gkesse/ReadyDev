//===============================================
#include "GShapeRectangle.h"
//===============================================
GShapeRectangle::GShapeRectangle() {

}
//===============================================
GShapeRectangle::GShapeRectangle(const double& size) {
    m_width = size;
    m_height = size;
}
//===============================================
GShapeRectangle::GShapeRectangle(const double& width, const double& height) {
    m_width = width;
    m_height = height;
}
//===============================================
GShapeRectangle::~GShapeRectangle() {

}
//===============================================
double GShapeRectangle::area() const {
    double lArea = m_width*m_height;
    return lArea;
}
//===============================================
double GShapeRectangle::perimeter() const {
    double lPerimetre = 2*(m_width + m_height);
    return lPerimetre;
}
//===============================================
