//===============================================
#include "GDrawSDL.h"
//===============================================
GDrawSDL* GDrawSDL::m_instance = 0;
//===============================================
GDrawSDL::GDrawSDL() {

}
//===============================================
GDrawSDL::~GDrawSDL() {

}
//===============================================
GDrawSDL* GDrawSDL::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDL;
    }
    return m_instance;
}
//===============================================
void GDrawSDL::setVertices() {
    float m_vertices[] = {-0.5, -0.5, 0.0, 0.5, 0.5, -0.5};
    int m_size = sizeof(m_vertices)/sizeof(float);
    for(int i = 0; i < m_size; i++) {
        m_verticesMap[i] = m_vertices[i];
    }
}
//===============================================
void GDrawSDL::draw() {
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, m_verticesMap);
    glEnableVertexAttribArray(0);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(0);
}
//===============================================
