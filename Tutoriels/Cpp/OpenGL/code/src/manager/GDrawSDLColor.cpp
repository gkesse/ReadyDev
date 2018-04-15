//===============================================
#include "GDrawSDLColor.h"
#include "GVertex.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawSDLColor* GDrawSDLColor::m_instance = 0;
//===============================================
GDrawSDLColor::GDrawSDLColor() {

}
//===============================================
GDrawSDLColor::~GDrawSDLColor() {

}
//===============================================
GDrawSDLColor* GDrawSDLColor::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLColor;
    }
    return m_instance;
}
//===============================================
void GDrawSDLColor::initDraw() {
    float n_vertices[] = {-0.5, -0.5, 0.0, 0.5, 0.5, -0.5};
    GVertex::Instance()->loadVertex1D(m_vertices, n_vertices, 0, 6);
}
//===============================================
void GDrawSDLColor::draw() {
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(0);
}
//===============================================
