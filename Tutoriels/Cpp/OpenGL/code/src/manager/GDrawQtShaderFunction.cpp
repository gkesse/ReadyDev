//===============================================
#include "GDrawQtShaderFunction.h"
#include "GShader.h"
#include "GCamera.h"
#include "GLight.h"
//===============================================
GDrawQtShaderFunction* GDrawQtShaderFunction::m_instance = 0;
//===============================================
GDrawQtShaderFunction::GDrawQtShaderFunction() {

}
//===============================================
GDrawQtShaderFunction::~GDrawQtShaderFunction() {

}
//===============================================
GDrawQtShaderFunction* GDrawQtShaderFunction::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtShaderFunction;
    }
    return m_instance;
}
//===============================================
void GDrawQtShaderFunction::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_shader_function.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_shader_function.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    m_objTorus = new GObjTorus(0.7f, 0.3f, 30, 30);
    m_angle = 0.0f;
}
//===============================================
void GDrawQtShaderFunction::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(0.0f,0.0f,3.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawQtShaderFunction::updateCamera(int w, int h) {
    GCamera::Instance()->perspective(m_projection, w, h);
}
//===============================================
void GDrawQtShaderFunction::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {m_angle -= 360.0f;}
}
//===============================================
void GDrawQtShaderFunction::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    m_modelView = lView;
    GLight::Instance()->draw(m_program, m_modelView);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f,1.0f,0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(-45.0f), glm::vec3(1.0f,0.0f,0.0f));
    m_objTorus->draw(m_program, m_projection, m_modelView);
}
//===============================================
