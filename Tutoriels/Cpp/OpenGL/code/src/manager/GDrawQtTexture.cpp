//===============================================
#include "GDrawQtTexture.h"
#include "GShader.h"
#include "GTexture.h"
#include "GConfig.h"
//===============================================
GDrawQtTexture* GDrawQtTexture::m_instance = 0;
//===============================================
GDrawQtTexture::GDrawQtTexture() {

}
//===============================================
GDrawQtTexture::~GDrawQtTexture() {

}
//===============================================
GDrawQtTexture* GDrawQtTexture::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtTexture;
    }
    return m_instance;
}
//===============================================
void GDrawQtTexture::initDraw() {
    float lVertices[] = {
        -0.8f, -0.8f, 0.0f, 0.8f, -0.8f, 0.0f, 0.8f,  0.8f, 0.0f,
        -0.8f, -0.8f, 0.0f, -0.8f, 0.8f, 0.0f, 0.8f,  0.8f, 0.0f
    };
    float lTexCoords[] = {
        0.0f, 0.0f, 1.0f, 0.0f, 1.0f, 1.0f,
        0.0f, 0.0f, 0.0f, 1.0f, 1.0f, 1.0f,
    };

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_texture.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_texture.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    m_textureId = GTexture::Instance()->loadTexture("res/img/brick1.jpg");

    glUseProgram(m_program);

    GLuint lBuffers[2];
    glGenBuffers(2, lBuffers);

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lVertices), lVertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lTexCoords), lTexCoords, GL_STATIC_DRAW);

    glGenVertexArrays( 1, &m_VOA);
    glBindVertexArray(m_VOA);

    glEnableVertexAttribArray(0);
    glEnableVertexAttribArray(1);

    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
    glBindBuffer(GL_ARRAY_BUFFER, lBuffers[1]);
    glVertexAttribPointer(1, 2, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
}
//===============================================
void GDrawQtTexture::draw() {
    glBindVertexArray(m_VOA);
    GShader::Instance()->setUniform(m_program, "Tex", 0);
    glDrawArrays(GL_TRIANGLES, 0, 6);
}
//===============================================
