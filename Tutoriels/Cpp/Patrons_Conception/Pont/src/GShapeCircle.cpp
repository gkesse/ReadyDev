//===============================================
#include "GShapeCircle.h"
//===============================================
GShapeCircle* GShapeCircle::m_instance = 0;
//===============================================
GShapeCircle::GShapeCircle() {

}
//===============================================
GShapeCircle::~GShapeCircle() {
    
}
//===============================================
GShapeCircle* GShapeCircle::Instance() {
    if(m_instance == 0) {
        m_instance = new GShapeCircle;
    }
    return m_instance;
} 
//===============================================
void GShapeCircle::draw() {
    m_draw->drawCircle();
} 
//===============================================
