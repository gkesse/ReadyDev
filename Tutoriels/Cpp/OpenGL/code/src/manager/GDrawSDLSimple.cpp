//===============================================
#include "GDrawSDLSimple.h"
//===============================================
GDrawSDLSimple* GDrawSDLSimple::m_instance = 0;
//===============================================
GDrawSDLSimple::GDrawSDLSimple() {

}
//===============================================
GDrawSDLSimple::~GDrawSDLSimple() {

}
//===============================================
GDrawSDLSimple* GDrawSDLSimple::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLSimple;
    }
    return m_instance;
}
//===============================================
void GDrawSDLSimple::draw() {
    float lVertices[] = {-0.5, -0.5, 0.0, 0.5, 0.5, -0.5};
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, lVertices);
    glEnableVertexAttribArray(0);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(0);
}
//===============================================
