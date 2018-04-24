//===============================================
#include "GDrawSDLBackground.h"
#include "GVertex.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawSDLBackground* GDrawSDLBackground::m_instance = 0;
//===============================================
GDrawSDLBackground::GDrawSDLBackground() {

}
//===============================================
GDrawSDLBackground::~GDrawSDLBackground() {

}
//===============================================
GDrawSDLBackground* GDrawSDLBackground::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLBackground;
    }
    return m_instance;
}
//===============================================
void GDrawSDLBackground::initDraw() {
    float m_vertices[] = {-0.5, -0.5, 0.0, 0.5, 0.5, -0.5};

    glGenBuffers(1, m_buffers);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_vertices), m_vertices, GL_STATIC_DRAW);

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/color/color_read.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/color/color_read.frag", 0},
        {GL_NONE, "", 0}
    };

    GLuint m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);
}
//===============================================
void GDrawSDLBackground::draw() {
    glEnableVertexAttribArray(1);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(0);
}
//===============================================
