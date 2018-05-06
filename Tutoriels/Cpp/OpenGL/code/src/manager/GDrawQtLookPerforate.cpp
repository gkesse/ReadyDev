//===============================================
#include "GDrawQtLookPerforate.h"
#include "GShader.h"
#include "GCamera.h"
#include "GLight.h"
//===============================================
GDrawQtLookPerforate* GDrawQtLookPerforate::m_instance = 0;
//===============================================
GDrawQtLookPerforate::GDrawQtLookPerforate() {

}
//===============================================
GDrawQtLookPerforate::~GDrawQtLookPerforate() {

}
//===============================================
GDrawQtLookPerforate* GDrawQtLookPerforate::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLookPerforate;
    }
    return m_instance;
}
//===============================================
void GDrawQtLookPerforate::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_two_sided.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_two_sided.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    glm::mat4 transform = glm::translate(glm::mat4(1.0f), glm::vec3(0.0f,1.5f,0.25f));
    m_objTeapot = new GObjTeapot(13, transform);
    m_angle = 0.0f;
}
//===============================================
void GDrawQtLookPerforate::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(5.0f,1.0f,10.0f), glm::vec3(0.0f,0.0f,0.0f), glm::vec3(0.0f,1.0f,0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawQtLookPerforate::updateCamera(int w, int h) {
    GCamera::Instance()->perspective(m_projection, w, h);
}
//===============================================
void GDrawQtLookPerforate::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {m_angle -= 360.0f;}
}
//===============================================
void GDrawQtLookPerforate::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f,1.0f,0.0f));
    GLight::Instance()->draw(m_program, m_modelView);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(-35.0f), glm::vec3(1.0f,0.0f,0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(35.0f), glm::vec3(0.0f,1.0f,0.0f));
    m_objTeapot->draw(m_program, m_projection, m_modelView);
}
//===============================================
