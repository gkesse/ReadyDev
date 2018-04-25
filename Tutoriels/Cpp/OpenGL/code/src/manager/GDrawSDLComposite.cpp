//===============================================
#include "GDrawSDLComposite.h"
#include "GShader.h"
//===============================================
GDrawSDLComposite* GDrawSDLComposite::m_instance = 0;
//===============================================
GDrawSDLComposite::GDrawSDLComposite() {

}
//===============================================
GDrawSDLComposite::~GDrawSDLComposite() {

}
//===============================================
GDrawSDLComposite* GDrawSDLComposite::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLComposite;
    }
    return m_instance;
}
//===============================================
void GDrawSDLComposite::initDraw() {
    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_matrix.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_matrix.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);
}
//===============================================
void GDrawSDLComposite::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
}
//===============================================
void GDrawSDLComposite::draw() {
    float lVertices[] = {-0.5f, -0.5f, 0.0f, 0.5f, 0.5f, -0.5f};
    float lColors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f,
    };
    m_modelView = glm::lookAt(glm::vec3(0.0f, 0.0f, 2.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    glUseProgram(m_program);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, lVertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, lColors);
    glEnableVertexAttribArray(1);
    m_modelView = glm::scale(m_modelView, glm::vec3(0.8f,0.8f,0.8f));
    m_modelView = glm::translate(m_modelView, glm::vec3(0.0f,0.5f,0.0f));
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", m_modelView);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", m_projection);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    m_modelView = glm::rotate(m_modelView, glm::radians(180.0f), glm::vec3(0.0f,0.0f,1.0f));
    m_modelView = glm::translate(m_modelView, glm::vec3(0.0f,1.0f,0.0f));
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", m_modelView);
    GShader::Instance()->setUniform(m_program, "ProjectionMatrix", m_projection);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
