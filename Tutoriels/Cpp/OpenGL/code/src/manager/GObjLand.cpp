//===============================================
#include "GObjLand.h"
#include "GShader.h"
#include "GTexture.h"
#include "GVertex.h"
//===============================================
GObjLand::GObjLand() {

}
//===============================================
GObjLand::GObjLand(float Size) {
    const char* lImg = "res/img/grass.jpg";
    initObject(Size, lImg);
}
//===============================================
GObjLand::GObjLand(float Size, const char* img) {
    initObject(Size, img);
}
//===============================================
GObjLand::~GObjLand() {

}
//===============================================
void GObjLand::initObject(float Size, const char* img) {
    float lVertices[] = {
        -Size, 0.0f, -Size, Size, 0.0f, -Size, Size, 0.0f, Size,
        -Size, 0.0f, -Size, -Size, 0.0f, Size, Size, 0.0f, Size
    };
    float lTexCoords[] = {
        0.0f, Size, Size, Size, Size, 0.0f,
        0.0f, Size, 0.0f, 0.0f, Size, 0.0f,
    };
    GVertex::Instance()->loadVertex1D(m_vertices, lVertices, 0, 18);
    GVertex::Instance()->loadVertex1D(m_texCoords, lTexCoords, 0, 12);

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_texture.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_texture.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    m_texture = GTexture::Instance()->loadTexture(img);
}
//===============================================
void GObjLand::draw(glm::mat4& projection, glm::mat4& modelview) {
    glUseProgram(m_program);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, m_vertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 2, GL_FLOAT, GL_FALSE, 0, m_texCoords);
    glEnableVertexAttribArray(1);
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", modelview);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", projection);
    GShader::Instance()->setUniform(m_program, "Tex", 0);
    glBindTexture(GL_TEXTURE_2D, m_texture);
    glDrawArrays(GL_TRIANGLES, 0, 6);
    glBindTexture(GL_TEXTURE_2D, 0);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
