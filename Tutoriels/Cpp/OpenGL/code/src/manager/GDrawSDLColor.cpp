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
    float m_verticesIn[] = {-0.5, -0.5, 0.0, 0.5, 0.5, -0.5};
    GVertex::Instance()->loadVertex1D(m_vertices, m_verticesIn, 0, 6);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, m_vertices);

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/color/color_read.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/color/color_read.frag", 0},
        {GL_NONE, "", 0}
    };

    GLuint m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    glEnableVertexAttribArray(0);
}
//===============================================
void GDrawSDLColor::draw() {
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glDrawArrays(GL_TRIANGLES, 0, 3);
}
//===============================================
