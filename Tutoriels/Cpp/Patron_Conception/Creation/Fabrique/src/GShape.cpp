//===============================================
#include "GShape.h"
//===============================================
GShape::GShape() {
    m_pt.x = 0; m_pt.y = 0;
    m_pt1.x = 0; m_pt1.y = 0;
    m_pt2.x = 0; m_pt2.y = 0;
    m_rect.x = 0; m_rect.y = 0; m_rect.w = 0; m_rect.h = 0;
}
//===============================================
GShape::~GShape() {

}
//===============================================
void GShape::setPoint(const double &x, const double &y) {
    m_pt.x = x;
    m_pt.y = y;
}
//===============================================
void GShape::setLine(const double &x1, const double &y1, const double &x2, const double &y2) {
    m_pt1.x = x1;
    m_pt1.y = y1;
    m_pt2.x = x2;
    m_pt2.y = y2;
}
//===============================================
void GShape::setRect(const double &x, const double &y, const double &w, const double &h) {
    m_rect.x = x;
    m_rect.y = y;
    m_rect.w = w;
    m_rect.h = h;
}
//===============================================
void GShape::draw() {

}
//===============================================
