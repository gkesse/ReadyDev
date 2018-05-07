//===============================================
#include "GDrawQtLightMultiPosition.h"
#include "GShader.h"
#include "GCamera.h"
#include "GLight.h"
//===============================================
GDrawQtLightMultiPosition* GDrawQtLightMultiPosition::m_instance = 0;
//===============================================
GDrawQtLightMultiPosition::GDrawQtLightMultiPosition() {

}
//===============================================
GDrawQtLightMultiPosition::~GDrawQtLightMultiPosition() {

}
//===============================================
GDrawQtLightMultiPosition* GDrawQtLightMultiPosition::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLightMultiPosition;
    }
    return m_instance;
}
//===============================================
void GDrawQtLightMultiPosition::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_multi_position.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_multi_position.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    m_objTeapot = new GObjTeapot(13, glm::mat4(1.0f));
    m_angle = 0.0f;
}
//===============================================
void GDrawQtLightMultiPosition::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(5.0f,1.0f,10.0f), glm::vec3(0.0f,0.0f,0.0f), glm::vec3(0.0f,1.0f,0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawQtLightMultiPosition::updateCamera(int w, int h) {
    GCamera::Instance()->perspective(m_projection, w, h);
}
//===============================================
void GDrawQtLightMultiPosition::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {m_angle -= 360.0f;}
}
//===============================================
void GDrawQtLightMultiPosition::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    m_modelView = lView;
    GLight::Instance()->draw(m_program, m_modelView);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f,1.0f,0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(-45.0f), glm::vec3(1.0f,0.0f,0.0f));
    m_objTeapot->draw(m_program, m_projection, m_modelView);
}
//===============================================
