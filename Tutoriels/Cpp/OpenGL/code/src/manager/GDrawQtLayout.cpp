//===============================================
#include "GDrawQtLayout.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtLayout* GDrawQtLayout::m_instance = 0;
//===============================================
GDrawQtLayout::GDrawQtLayout() {

}
//===============================================
GDrawQtLayout::~GDrawQtLayout() {

}
//===============================================
GDrawQtLayout* GDrawQtLayout::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLayout;
    }
    return m_instance;
}
//===============================================
void GDrawQtLayout::initDraw() {
    float lVertices[] = {
        -0.8f, -0.8f, 0.0f,
         0.8f, -0.8f, 0.0f,
         0.0f,  0.8f, 0.0f
    };
    float lColors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f
    };


    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_layout.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_layout.frag", 0},
        {GL_NONE, "", 0}
    };

    GLuint m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    GLuint m_buffers[2];
    glGenBuffers(2, m_buffers);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lVertices), lVertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lColors), lColors, GL_STATIC_DRAW);

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
void GDrawQtLayout::draw() {
    glBindVertexArray(m_vertexArrays[0]);
    glDrawArrays(GL_TRIANGLES, 0, 3);
}
//===============================================