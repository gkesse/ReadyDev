//===============================================
#include "GDrawSDLColorWr.h"
#include "GVertex.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawSDLColorWr* GDrawSDLColorWr::m_instance = 0;
//===============================================
GDrawSDLColorWr::GDrawSDLColorWr() {

}
//===============================================
GDrawSDLColorWr::~GDrawSDLColorWr() {

}
//===============================================
GDrawSDLColorWr* GDrawSDLColorWr::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLColorWr;
    }
    return m_instance;
}
//===============================================
void GDrawSDLColorWr::initDraw() {
    float m_verticesIn[] = {
        -0.5, -0.5, 0.0, 0.5, 0.5, -0.5
    };
    float m_colorsIn[] = {
        1.0, 0.0, 0.0,
        1.0, 0.0, 0.0,
        1.0, 0.0, 0.0
    };

    GVertex::Instance()->loadVertex1D(m_vertices, m_verticesIn, 0, 6);
    GVertex::Instance()->loadVertex1D(m_colors, m_colorsIn, 0, 9);

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/color/color_write.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/color/color_write.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
}
//===============================================
void GDrawSDLColorWr::draw() {
    glUseProgram(m_program);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, m_colors);
    glEnableVertexAttribArray(1);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
