//===============================================
#include "GDrawSDLTextureRepeat.h"
#include "GShader.h"
#include "GTexture.h"
#include "GEvent.h"
//===============================================
GDrawSDLTextureRepeat* GDrawSDLTextureRepeat::m_instance = 0;
//===============================================
GDrawSDLTextureRepeat::GDrawSDLTextureRepeat() {

}
//===============================================
GDrawSDLTextureRepeat::~GDrawSDLTextureRepeat() {

}
//===============================================
GDrawSDLTextureRepeat* GDrawSDLTextureRepeat::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLTextureRepeat;
    }
    return m_instance;
}
//===============================================
void GDrawSDLTextureRepeat::initDraw() {
    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_texture.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_texture.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    m_textureId = GTexture::Instance()->loadTexture("res/img/gazon.jpg");
    m_angleU = 0.0f;
    m_angleV = 0.0f;
}
//===============================================
void GDrawSDLTextureRepeat::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
}
//===============================================
void GDrawSDLTextureRepeat::draw() {
    float lVertices[] = {
        -10.0f, 0.0f, -10.0f, 10.0f, 0.0f, -10.0f, 10.0f, 0.0f, 10.0f,
        -10.0f, 0.0f, -10.0f, -10.0f, 0.0f, 10.0f, 10.0f, 0.0f, 10.0f
    };
    float lTexCoords[] = {
        0.0f, 10.0f, 10.0f, 10.0f, 10.0f, 0.0f,
        0.0f, 10.0f, 0.0f, 0.0f, 10.0f, 0.0f,
    };

    m_modelView = glm::lookAt(glm::vec3(10.0f, 5.0f, 10.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    glUseProgram(m_program);
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 0, lVertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 2, GL_FLOAT, GL_FALSE, 0, lTexCoords);
    glEnableVertexAttribArray(1);
    glBindTexture(GL_TEXTURE_2D, m_textureId);
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angleU), glm::vec3(0.0f,1.0f,0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angleV), glm::vec3(1.0f,0.0f,0.0f));
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", m_modelView);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", m_projection);
    GShader::Instance()->setUniform(m_program, "Tex", 0);
    glDrawArrays(GL_TRIANGLES, 0, 6);
    glBindTexture(GL_TEXTURE_2D, 0);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
void GDrawSDLTextureRepeat::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//===============================================
void GDrawSDLTextureRepeat::onKeyDown(SDL_Event* event) {
    switch (event->key.keysym.sym) {
    case SDLK_RIGHT:
        m_angleU += 20*0.1f;
        if(m_angleU >= 360.0f) {
            m_angleU -= 360.0f;
        }
        break;
    case SDLK_LEFT:
        m_angleU -= 20*0.1f;
        if(m_angleU <= 0) {
            m_angleU += 360.0f;
        }
        break;
    case SDLK_UP:
        m_angleV += 20*0.1f;
        if(m_angleV >= 360.0f) {
            m_angleV -= 360.0f;
        }
        break;
    case SDLK_DOWN:
        m_angleV -= 20*0.1f;
        if(m_angleV <= 0) {
            m_angleV += 360.0f;
        }
        break;
    }
}
//===============================================
