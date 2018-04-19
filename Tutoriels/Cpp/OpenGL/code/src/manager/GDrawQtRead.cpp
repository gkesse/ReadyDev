//===============================================
#include "GDrawQtRead.h"
#include "GVertex.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtRead* GDrawQtRead::m_instance = 0;
//===============================================
GDrawQtRead::GDrawQtRead() {

}
//===============================================
GDrawQtRead::~GDrawQtRead() {

}
//===============================================
GDrawQtRead* GDrawQtRead::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtRead;
    }
    return m_instance;
}
//===============================================
void GDrawQtRead::initDraw() {
    float m_vertices[] = {
        -0.8f, -0.8f, 0.0f,
         0.8f, -0.8f, 0.0f,
         0.0f,  0.8f, 0.0f
    };
    float m_colors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f
    };
    GLuint m_buffers[2];

    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_read.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_read.frag", 0},
        {GL_NONE, "", 0}
    };

    GLuint m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    glGenBuffers(2, m_buffers);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_vertices), m_vertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(m_colors), m_colors, GL_STATIC_DRAW);

    glGenVertexArrays( 1, m_vertexArrays);
    glBindVertexArray(m_vertexArrays[0]);

    glEnableVertexAttribArray(0);
    glEnableVertexAttribArray(1);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
}
//===============================================
void GDrawQtRead::draw() {
    glBindVertexArray(m_vertexArrays[0]);
    glDrawArrays(GL_TRIANGLES, 0, 3);
}
//===============================================
