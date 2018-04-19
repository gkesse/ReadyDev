//===============================================
#include "GDrawQtSimple.h"
#include "GVertex.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtSimple* GDrawQtSimple::m_instance = 0;
//===============================================
GDrawQtSimple::GDrawQtSimple() {

}
//===============================================
GDrawQtSimple::~GDrawQtSimple() {

}
//===============================================
GDrawQtSimple* GDrawQtSimple::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtSimple;
    }
    return m_instance;
}
//===============================================
void GDrawQtSimple::initDraw() {
    float m_vertices[] = {
        -0.8f, -0.8f, 0.0f,
         0.8f, -0.8f, 0.0f,
         0.0f,  0.8f, 0.0f
    };
    GLuint m_buffers[1];

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_simple.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_simple.frag", 0},
        {GL_NONE, "", 0}
    };

    GLuint m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    glGenBuffers(1, m_buffers);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_vertices), m_vertices, GL_STATIC_DRAW);

    glGenVertexArrays( 1, m_vertexArrays);
    glBindVertexArray(m_vertexArrays[0]);

    glEnableVertexAttribArray(0);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
}
//===============================================
void GDrawQtSimple::draw() {
    glBindVertexArray(m_vertexArrays[0]);
    glDrawArrays(GL_TRIANGLES, 0, 3);
}
//===============================================
