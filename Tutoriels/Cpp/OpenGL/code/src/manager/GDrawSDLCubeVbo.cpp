//===============================================
#include "GDrawSDLCubeVbo.h"
#include "GShader.h"
//===============================================
GDrawSDLCubeVbo* GDrawSDLCubeVbo::m_instance = 0;
//===============================================
GDrawSDLCubeVbo::GDrawSDLCubeVbo() {

}
//===============================================
GDrawSDLCubeVbo::~GDrawSDLCubeVbo() {

}
//===============================================
GDrawSDLCubeVbo* GDrawSDLCubeVbo::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLCubeVbo;
    }
    return m_instance;
}
//===============================================
void GDrawSDLCubeVbo::initDraw() {
    m_objCubeVbo = GObjCubeVbo(1.0f);
}
//===============================================
void GDrawSDLCubeVbo::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
}
//===============================================
void GDrawSDLCubeVbo::draw() {
    m_modelView = glm::lookAt(glm::vec3(3.0f, 3.0f, 2.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    m_objCubeVbo.draw(m_projection, m_modelView);
}
//===============================================
