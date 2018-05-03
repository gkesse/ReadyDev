//===============================================
#include "GObjCube.h"
#include "GShader.h"
#include "GVertex.h"
//===============================================
GObjCube::GObjCube() {
    m_program = 0;
}
//===============================================
GObjCube::GObjCube(float Size) {
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
    GVertex::Instance()->loadVertex1D(m_vertices, lVertices, 0, 108);
    GVertex::Instance()->loadVertex1D(m_colors, lColors, 0, 108);

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_matrix.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_matrix.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);

}
//===============================================
GObjCube::~GObjCube() {

}
//===============================================
void GObjCube::draw(glm::mat4& projection, glm::mat4& modelview) {
    glUseProgram(m_program);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, m_colors);
    glEnableVertexAttribArray(1);
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", modelview);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", projection);
    glDrawArrays(GL_TRIANGLES, 0, 36);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
