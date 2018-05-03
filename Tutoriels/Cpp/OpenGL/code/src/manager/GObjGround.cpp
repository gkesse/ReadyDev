//===============================================
#include "GObjGround.h"
#include "GShader.h"
#include "GTexture.h"
#include "GVertex.h"
//===============================================
GObjGround::GObjGround() {

}
//===============================================
GObjGround::GObjGround(float Size) {
    const char* lGround = "res/img/ground.jpg";
    initObject(30, 30, lGround);
}
//===============================================
GObjGround::GObjGround(float Width, float Height, const char* Ground) {
    initObject(Width, Height, Ground);
}
//===============================================
GObjGround::~GObjGround() {

}
//===============================================
void GObjGround::initObject(float Width, float Height, const char* Ground) {
    Width /= 2.0f;
    Height /= 2.0f;

    float lVertices[] = {
        -Height, 0.0f, -Width, Height, 0.0f, -Width, Height, 0.0f, Width,
        -Height, 0.0f, -Width, -Height, 0.0f, Width, Height, 0.0f, Width
    };
    float lTexCoords[] = {
        0.0f, 0.0f, Height, 0.0f, Height, Width,
        0.0f, 0.0f, 0.0f, Width, Height, Width
    };
    GVertex::Instance()->loadVertex1D(m_vertices, lVertices, 0, VERTEX_MAX*3);
    GVertex::Instance()->loadVertex1D(m_texCoords, lTexCoords, 0, VERTEX_MAX*2);

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_texture.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_texture.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    m_texture = GTexture::Instance()->loadTexture(Ground);
}
//===============================================
void GObjGround::draw(glm::mat4& projection, glm::mat4& modelview) {
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
