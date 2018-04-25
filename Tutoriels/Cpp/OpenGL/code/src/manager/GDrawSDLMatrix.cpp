//===============================================
#include "GDrawSDLMatrix.h"
#include "GShader.h"
#include "GCamera.h"
//===============================================
GDrawSDLMatrix* GDrawSDLMatrix::m_instance = 0;
//===============================================
GDrawSDLMatrix::GDrawSDLMatrix() {

}
//===============================================
GDrawSDLMatrix::~GDrawSDLMatrix() {

}
//===============================================
GDrawSDLMatrix* GDrawSDLMatrix::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLMatrix;
    }
    return m_instance;
}
//===============================================
void GDrawSDLMatrix::initDraw() {
    GShaderInfo  lShaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/3.1/color_matrix.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/3.1/color_matrix.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(lShaders);

    SDL_DisplayMode lDM;
    SDL_GetCurrentDisplayMode(0, &lDM);
    int lWidth = lDM.w;
    int lHeight = lDM.h;
    float lRatio = (float)lWidth/lHeight;
    float lFoV = 70.0f;
    float lZNear = 1.0f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
    //m_modelView = glm::mat4(1.0f);
    m_modelView = glm::lookAt(glm::vec3(0.0f, 0.0f, 1.5f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    //m_modelView = glm::rotate(m_modelView, glm::radians(90.0f), glm::vec3(0.0f,0.0f,1.0f));
}
//===============================================
void GDrawSDLMatrix::draw() {
    float lVertices[] = {-0.5f, -0.5f, 0.0f, 0.5f, 0.5f, -0.5f};
    float lColors[] = {
        1.0f, 0.0f, 0.0f,
        0.0f, 1.0f, 0.0f,
        0.0f, 0.0f, 1.0f,
    };
    glUseProgram(m_program);
    glVertexAttribPointer(0, 2, GL_FLOAT, GL_FALSE, 0, lVertices);
    glEnableVertexAttribArray(0);
    glVertexAttribPointer(1, 3, GL_FLOAT, GL_FALSE, 0, lColors);
    glEnableVertexAttribArray(1);
    GShader::Instance()->setUniform("ModelViewMatrix", m_modelView);
    GShader::Instance()->setUniform("ProjectionMatrix", m_projection);
    glDrawArrays(GL_TRIANGLES, 0, 3);
    glDisableVertexAttribArray(1);
    glDisableVertexAttribArray(0);
    glUseProgram(0);
}
//===============================================
