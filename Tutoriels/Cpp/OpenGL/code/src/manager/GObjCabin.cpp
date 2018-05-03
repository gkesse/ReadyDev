//===============================================
#include "GObjCabin.h"
#include "GShader.h"
#include "GTexture.h"
#include "GVertex.h"
//===============================================
GObjCabin::GObjCabin() {
    const char* lImg = "res/img/grass.jpg";
    initObject(lImg);
}
//===============================================
GObjCabin::GObjCabin(const char* img) {
    initObject(img);
}
//===============================================
GObjCabin::~GObjCabin() {

}
//===============================================
void GObjCabin::initObject(const char* img) {
    float lVertices[] = {
        -5.0f, 0.0f, -5.0f, 5.0f, 0.0f, -5.0f, 5.0f, 5.0f, -5.0f,
        -5.0f, 0.0f, -5.0f, -5.0f, 5.0f, -5.0f, 5.0f, 5.0f, -5.0f,
        -5.0f, 0.0f, -5.0f, -5.0f, 0.0f, 5.0f, -5.0f, 5.0f, 5.0f,
        -5.0f, 0.0f, -5.0f, -5.0f, 5.0f, -5.0f, -5.0f, 5.0f, 5.0f,
        5.0f, 0.0f, -5.0f, 5.0f, 0.0f, 5.0f, 5.0f, 5.0f, 5.0f,
        5.0f, 0.0f, -5.0f, 5.0f, 5.0f, -5.0f, 5.0f, 5.0f, 5.0f
    };
    float lTexCoords[] = {
        0.0f, 0.0f, 1.0f, 0.0f, 1.0f, 1.0f,
        0.0f, 0.0f, 0.0f, 1.0f, 1.0f, 1.0f,
        0.0f, 0.0f, 1.0f, 0.0f, 1.0f, 1.0f,
        0.0f, 0.0f, 0.0f, 1.0f, 1.0f, 1.0f,
        0.0f, 0.0f, 1.0f, 0.0f, 1.0f, 1.0f,
        0.0f, 0.0f, 0.0f, 1.0f, 1.0f, 1.0f
    };
    GVertex::Instance()->loadVertex1D(m_vertices, lVertices, 0, VERTEX_MAX*3);
    GVertex::Instance()->loadVertex1D(m_texCoords, lTexCoords, 0, VERTEX_MAX*2);

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_texture.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_texture.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    m_texture = GTexture::Instance()->loadTexture(img);
}
//===============================================
void GObjCabin::draw(glm::mat4& projection, glm::mat4& modelview) {
    glUseProgram(m_program);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 2, GL_FLOAT, GL_FALSE, 0, m_texCoords);
    glEnableVertexAttribArray(1);
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", modelview);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", projection);
    GShader::Instance()->setUniform(m_program, "Tex", 0);
    glBindTexture(GL_TEXTURE_2D, m_texture);
    glDrawArrays(GL_TRIANGLES, 0, VERTEX_MAX);
    glBindTexture(GL_TEXTURE_2D, 0);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
