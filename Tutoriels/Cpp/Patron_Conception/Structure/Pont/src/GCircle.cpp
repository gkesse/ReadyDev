//===============================================
#include "GCircle.h"
//===============================================
GCircle::GCircle() {
    m_drawing = 0;
}
//===============================================
GCircle::GCircle(GDrawing* drawing) {
    m_drawing = drawing;
}
//===============================================
GCircle::~GCircle() {
    if(m_drawing != 0) {delete m_drawing; m_drawing = 0;}
}
//===============================================
void GCircle::draw() {
    m_drawing->drawCircle();
}
//===============================================
