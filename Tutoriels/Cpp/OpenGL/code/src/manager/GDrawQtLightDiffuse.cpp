//===============================================
#include "GDrawQtLightDiffuse.h"
#include "GShader.h"
#include "GCamera.h"
#include "GLight.h"
//===============================================
GDrawQtLightDiffuse* GDrawQtLightDiffuse::m_instance = 0;
//===============================================
GDrawQtLightDiffuse::GDrawQtLightDiffuse() {

}
//===============================================
GDrawQtLightDiffuse::~GDrawQtLightDiffuse() {

}
//===============================================
GDrawQtLightDiffuse* GDrawQtLightDiffuse::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLightDiffuse;
    }
    return m_instance;
}
//===============================================
void GDrawQtLightDiffuse::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_diffuse.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_diffuse.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    m_objTorus = new GObjTorus(0.7f, 0.3f, 30, 30);
}
//===============================================
void GDrawQtLightDiffuse::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(0.0f,0.0f,3.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawQtLightDiffuse::updateCamera(int w, int h) {
    GCamera::Instance()->perspective(m_projection, w, h);
}
//===============================================
void GDrawQtLightDiffuse::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    GLight::Instance()->draw(m_program, lView);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(-35.0f), glm::vec3(1.0f,0.0f,0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(35.0f), glm::vec3(0.0f,1.0f,0.0f));
    m_objTorus->draw(m_program, m_projection, m_modelView);
}
//===============================================
