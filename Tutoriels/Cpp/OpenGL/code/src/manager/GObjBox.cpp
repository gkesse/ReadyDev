//===============================================
#include "GObjBox.h"
#include "GShader.h"
#include "GTexture.h"
#include "GVertex.h"
//===============================================
GObjBox::GObjBox() {

}
//===============================================
GObjBox::GObjBox(float Size) {
    const char* lImg = "res/img/box.jpg";
    initObject(Size, lImg);
}
//===============================================
GObjBox::GObjBox(float Size, const char* img) {
    initObject(Size, img);
}
//===============================================
GObjBox::~GObjBox() {

}
//===============================================
void GObjBox::initObject(float Size, const char* img) {
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
    float lTexCoords[] = {
        1.0f, 0.0f,  0.0f, 0.0f,  0.0f, 1.0f,
        1.0f, 0.0f,  1.0f, 1.0f,  0.0f, 1.0f,
        0.0f, 0.0f,  1.0f, 0.0f,  1.0f, 1.0f,
        0.0f, 0.0f,  0.0f, 1.0f,  1.0f, 1.0f,
        0.0f, 1.0f,  1.0f, 1.0f,  1.0f, 0.0f,
        0.0f, 1.0f,  0.0f, 0.0f,  1.0f, 0.0f,
        0.0f, 0.0f,  1.0f, 0.0f,  1.0f, 1.0f,
        0.0f, 0.0f,  0.0f, 1.0f,  1.0f, 1.0f,
        0.0f, 0.0f,  1.0f, 0.0f,  1.0f, 1.0f,
        0.0f, 0.0f,  0.0f, 1.0f,  1.0f, 1.0f,
        0.0f, 0.0f,  1.0f, 0.0f,  1.0f, 1.0f,
        0.0f, 0.0f,  0.0f, 1.0f,  1.0f, 1.0f
    };
    GVertex::Instance()->loadVertex1D(m_vertices, lVertices, 0, 108);
    GVertex::Instance()->loadVertex1D(m_texCoords, lTexCoords, 0, 72);

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_texture.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_texture.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    m_texture = GTexture::Instance()->loadTexture(img);
}
//===============================================
void GObjBox::draw(glm::mat4& projection, glm::mat4& modelview) {
    glUseProgram(m_program);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 2, GL_FLOAT, GL_FALSE, 0, m_texCoords);
    glEnableVertexAttribArray(1);
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", modelview);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", projection);
    GShader::Instance()->setUniform(m_program, "Tex", 0);
    glBindTexture(GL_TEXTURE_2D, m_texture);
    glDrawArrays(GL_TRIANGLES, 0, 36);
    glBindTexture(GL_TEXTURE_2D, 0);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
