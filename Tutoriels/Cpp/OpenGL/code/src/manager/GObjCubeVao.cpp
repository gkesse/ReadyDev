//===============================================
#include "GObjCubeVao.h"
#include "GShader.h"
#include "GVertex.h"
//===============================================
GObjCubeVao::GObjCubeVao() {
    m_program = 0;
}
//===============================================
GObjCubeVao::GObjCubeVao(float Size) {
    initObject(Size);
}
//===============================================
GObjCubeVao::~GObjCubeVao() {

}
//===============================================
void GObjCubeVao::initObject(float Size) {
    float lVertices[] = {
        -Size, -Size, -Size, Size, -Size, -Size, Size, Size, -Size,
        -Size, -Size, -Size, -Size, Size, -Size, Size, Size, -Size,
        Size, -Size, Size, Size, -Size, -Size, Size, Size, -Size,
        Size, -Size, Size, Size, Size, Size, Size, Size, -Size,
        -Size, -Size, Size, Size, -Size, Size, Size, -Size, -Size,
        -Size, -Size, Size, -Size, -Size, -Size, Size, -Size, -Size,
        -Size, -Size, Size, Size, -Size, Size, Size, Size, Size,
        -Size, -Size, Size, -Size, Size, Size, Size, Size, Size,
        -Size, -Size, -Size, -Size, -Size, Size, -Size, Size, Size,
        -Size, -Size, -Size, -Size, Size, -Size, -Size, Size, Size,
        -Size, Size, Size, Size, Size, Size, Size, Size, -Size,
        -Size, Size, Size, -Size, Size, -Size, Size, Size, -Size
    };
    float lColors[] = {
        1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f,
        1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f,
        0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f,
        0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f, 0.0f, 0.0f, 1.0f,
        1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f,
        1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f,
        1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f,
        1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f,
        0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f,
        0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f, 0.0f, 1.0f, 1.0f
    };

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_matrix.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_matrix.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);

    GLuint m_VBO[2];
    glGenBuffers(2, m_VBO);

    glBindBuffer(GL_ARRAY_BUFFER, m_VBO[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lVertices), lVertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, m_VBO[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lColors), lColors, GL_STATIC_DRAW);

    glGenVertexArrays(1, &m_VAO);
    glBindVertexArray(m_VAO);

    glBindBuffer(GL_ARRAY_BUFFER, m_VBO[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
    glEnableVertexAttribArray(0);
    glBindBuffer(GL_ARRAY_BUFFER, m_VBO[1]);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
    glEnableVertexAttribArray(1);
}
//===============================================
void GObjCubeVao::draw(glm::mat4& projection, glm::mat4& modelview) {
    glUseProgram(m_program);
    glBindVertexArray(m_VAO);
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", modelview);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", projection);
    glDrawArrays(GL_TRIANGLES, 0, VERTEX_MAX);
    glBindVertexArray(0);
    glUseProgram(0);
}
//===============================================