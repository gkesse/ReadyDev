//===============================================
#include "GDrawSDLTranslate.h"
#include "GShader.h"
#include "GCamera.h"
//===============================================
#include <QtMath>
//===============================================
GDrawSDLTranslate* GDrawSDLTranslate::m_instance = 0;
//===============================================
GDrawSDLTranslate::GDrawSDLTranslate() {

}
//===============================================
GDrawSDLTranslate::~GDrawSDLTranslate() {

}
//===============================================
GDrawSDLTranslate* GDrawSDLTranslate::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLTranslate;
    }
    return m_instance;
}
//===============================================
void GDrawSDLTranslate::initDraw() {
    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_matrix.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_matrix.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
    m_angle = 0.0f;
}
//===============================================
void GDrawSDLTranslate::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
}
//===============================================
void GDrawSDLTranslate::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {
        m_angle -= 360.0f;
    }
    float lRmax = 3.8f;
    float lR = lRmax*qSin(qDegreesToRadians(m_angle));
    float lU = 0.0f;
    float x = lR*qSin(qDegreesToRadians(lU));
    float z = lR*qCos(qDegreesToRadians(lU));
    float lV = 0.0f;
    float lP = lR/qCos(qDegreesToRadians(lV));
    float y = lP*qSin(qDegreesToRadians(lV));
    m_vec = glm::vec3(x, y, z);
}
//===============================================
void GDrawSDLTranslate::draw() {
    float lVertices[] = {-0.5f, -0.5f, 0.0f, 0.5f, 0.5f, -0.5f};
    float lColors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f,
    };
    m_modelView = glm::lookAt(glm::vec3(0.0f, 0.0f, 5.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    glUseProgram(m_program);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, lVertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, lColors);
    glEnableVertexAttribArray(1);
    m_modelView = glm::translate(m_modelView, m_vec);
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", m_modelView);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", m_projection);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================