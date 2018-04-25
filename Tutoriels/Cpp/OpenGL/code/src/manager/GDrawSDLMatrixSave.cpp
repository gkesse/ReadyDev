//===============================================
#include "GDrawSDLMatrixSave.h"
#include "GShader.h"
//===============================================
GDrawSDLMatrixSave* GDrawSDLMatrixSave::m_instance = 0;
//===============================================
GDrawSDLMatrixSave::GDrawSDLMatrixSave() {
    m_angle = 0.0f;
}
//===============================================
GDrawSDLMatrixSave::~GDrawSDLMatrixSave() {

}
//===============================================
GDrawSDLMatrixSave* GDrawSDLMatrixSave::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLMatrixSave;
    }
    return m_instance;
}
//===============================================
void GDrawSDLMatrixSave::initDraw() {
    m_objCube = GObjCube(1.0f);
}
//===============================================
void GDrawSDLMatrixSave::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
    m_modelView = glm::mat4(1.0f);
}
//===============================================
void GDrawSDLMatrixSave::updateDraw() {
    m_angle += 20*0.1f;
    if(m_angle >= 360.0f) {
        m_angle -= 360.0f;
    }
}
//===============================================
void GDrawSDLMatrixSave::draw() {
    m_modelView = glm::lookAt(glm::vec3(5.0f, 5.0f, 5.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f, 1.0f, 0.0f));
    m_objCube.draw(m_projection, m_modelView);
    m_modelView = glm::translate(m_modelView, glm::vec3(1.0f, 1.0f, 1.0f));
    m_objCube.draw(m_projection, m_modelView);
}
//===============================================
