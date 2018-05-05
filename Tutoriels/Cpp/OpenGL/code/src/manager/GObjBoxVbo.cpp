//===============================================
#include "GObjBoxVbo.h"
#include "GShader.h"
#include "GTexture.h"
//===============================================
GObjBoxVbo::GObjBoxVbo() {
    m_program = 0;
}
//===============================================
GObjBoxVbo::GObjBoxVbo(float Size, const char* Box) {
    initObject(Size, Box);
}
//===============================================
GObjBoxVbo::~GObjBoxVbo() {

}
//===============================================
void GObjBoxVbo::initObject(float Size, const char* Box) {
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

    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_texture.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_texture.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    glUseProgram(m_program);

    m_textureMap["BOX"] = GTexture::Instance()->loadTexture(Box);

    GLuint m_buffers[2];
    glGenBuffers(2, m_buffers);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lVertices), lVertices, GL_STATIC_DRAW);
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glBufferData(GL_ARRAY_BUFFER, sizeof(lTexCoords), lTexCoords, GL_STATIC_DRAW);

    glGenVertexArrays(1, &m_VAO);
    glBindVertexArray(m_VAO);

    glEnableVertexAttribArray(0);
    glEnableVertexAttribArray(1);

    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[0]);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
    glBindBuffer(GL_ARRAY_BUFFER, m_buffers[1]);
    glVertexAttribPointer(1, 2, GL_FLOAT, GL_FALSE, 0, BUFFER_OFFSET(0));
}
//===============================================
void GObjBoxVbo::draw(glm::mat4& projection, glm::mat4& modelview) {
    glBindVertexArray(m_VAO);
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", modelview);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", projection);
    glBindTexture(GL_TEXTURE_2D, m_textureMap["BOX"]);
    glDrawArrays(GL_TRIANGLES, 0, VERTEX_MAX);
    glBindTexture(GL_TEXTURE_2D, 0);
}
//===============================================
