//===============================================
#include "GDrawSDLSimple.h"
#include "GVertex.h"
#include "GShader.h"
#include "GConfig.h"
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
void GDrawSDLSimple::initDraw() {
    float n_vertices[] = {-0.5, -0.5, 0.0, 0.5, 0.5, -0.5};
    GVertex::Instance()->loadVertex1D(m_vertices, n_vertices, 0, 6);
}
//===============================================
void GDrawSDLSimple::draw() {
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(0);
}
//===============================================
