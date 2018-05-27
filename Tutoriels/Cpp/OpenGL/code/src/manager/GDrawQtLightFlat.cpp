//===============================================
#include "GDrawQtLightFlat.h"
#include "GShader.h"
#include "GCamera.h"
#include "GLight.h"
//===============================================
GDrawQtLightFlat* GDrawQtLightFlat::m_instance = 0;
//===============================================
GDrawQtLightFlat::GDrawQtLightFlat() {

}
//===============================================
GDrawQtLightFlat::~GDrawQtLightFlat() {

}
//===============================================
GDrawQtLightFlat* GDrawQtLightFlat::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLightFlat;
    }
    return m_instance;
}
//===============================================
void GDrawQtLightFlat::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_flat.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_flat.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    m_objOgre = new GObjOgre("res/mesh/bs_ears.obj");
    m_angle = 0.0f;
}
//===============================================
void GDrawQtLightFlat::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(1.0f,1.0f,2.0f), glm::vec3(0.0f,0.0f,0.0f), glm::vec3(0.0f,1.0f,0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawQtLightFlat::updateCamera(int w, int h) {
    GCamera::Instance()->perspective(m_projection, w, h);
}
//===============================================
void GDrawQtLightFlat::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {m_angle -= 360.0f;}
}
//===============================================
void GDrawQtLightFlat::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    m_modelView = lView;
    GLight::Instance()->draw(m_program, m_modelView);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f,1.0f,0.0f));
    m_objOgre->draw(m_program, m_projection, m_modelView);
}
//===============================================
