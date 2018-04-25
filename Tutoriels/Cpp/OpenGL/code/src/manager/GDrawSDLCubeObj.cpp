//===============================================
#include "GDrawSDLCubeObj.h"
#include "GShader.h"
//===============================================
GDrawSDLCubeObj* GDrawSDLCubeObj::m_instance = 0;
//===============================================
GDrawSDLCubeObj::GDrawSDLCubeObj() {

}
//===============================================
GDrawSDLCubeObj::~GDrawSDLCubeObj() {

}
//===============================================
GDrawSDLCubeObj* GDrawSDLCubeObj::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLCubeObj;
    }
    return m_instance;
}
//===============================================
void GDrawSDLCubeObj::initDraw() {
    m_objCube = GObjCube(1.0f);
}
//===============================================
void GDrawSDLCubeObj::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
    m_modelView = glm::mat4(1.0f);
}
//===============================================
void GDrawSDLCubeObj::draw() {
    m_modelView = glm::lookAt(glm::vec3(3.0f, 3.0f, 2.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    m_objCube.draw(m_projection, m_modelView);
}
//===============================================
