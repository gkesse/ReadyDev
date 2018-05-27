//===============================================
#include "GDrawSDLCubeAnimate.h"
#include "GShader.h"
//===============================================
GDrawSDLCubeAnimate* GDrawSDLCubeAnimate::m_instance = 0;
//===============================================
GDrawSDLCubeAnimate::GDrawSDLCubeAnimate() {
    m_angle = 0.0f;
}
//===============================================
GDrawSDLCubeAnimate::~GDrawSDLCubeAnimate() {

}
//===============================================
GDrawSDLCubeAnimate* GDrawSDLCubeAnimate::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLCubeAnimate;
    }
    return m_instance;
}
//===============================================
void GDrawSDLCubeAnimate::initDraw() {
    m_objCube = GObjCube(1.0f);
}
//===============================================
void GDrawSDLCubeAnimate::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
    m_modelView = glm::mat4(1.0f);
}
//===============================================
void GDrawSDLCubeAnimate::updateDraw() {
    m_angle += 20*0.1f;
    if(m_angle >= 360.0f) {
        m_angle -= 360.0f;
    }
}
//===============================================
void GDrawSDLCubeAnimate::draw() {
    m_modelView = glm::lookAt(glm::vec3(3.0f, 3.0f, 2.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f, 1.0f, 0.0f));
    m_objCube.draw(m_projection, m_modelView);
}
//===============================================
