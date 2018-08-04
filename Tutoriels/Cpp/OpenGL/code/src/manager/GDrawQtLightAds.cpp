//===============================================
#include "GDrawQtLightAds.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtLightAds* GDrawQtLightAds::m_instance = 0;
//===============================================
GDrawQtLightAds::GDrawQtLightAds() {

}
//===============================================
GDrawQtLightAds::~GDrawQtLightAds() {
    m_angle = 0.0;
}
//===============================================
GDrawQtLightAds* GDrawQtLightAds::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLightAds;
    }
    return m_instance;
}
//===============================================
void GDrawQtLightAds::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_diffuse.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_diffuse.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    glEnable(GL_DEPTH_TEST);

    m_objTorus = new GTorus(0.7f, 0.3f, 30, 30);

    m_modelView = glm::mat4(1.0f);
    m_modelView *= glm::rotate(-35.0f, glm::vec3(1.0f,0.0f,0.0f));
    m_modelView *= glm::rotate(35.0f, glm::vec3(0.0f,1.0f,0.0f));
    m_view = glm::lookAt(glm::vec3(0.0f,0.0f,3.0f), glm::vec3(0.0f,0.0f,0.0f), glm::vec3(0.0f,1.0f,0.0f));
    m_projection = glm::mat4(1.0f);

    GShader::Instance()->setUniform(m_program, "Kd", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform(m_program, "Ld", 1.0f, 1.0f, 1.0f);
    GShader::Instance()->setUniform(m_program, "LightPosition", m_view * glm::vec4(5.0f,5.0f,2.0f,1.0f));
}
//===============================================
void GDrawQtLightAds::draw() {
    setMatrices();
    m_objTorus->render();
}
//===============================================
void GDrawQtLightAds::resize(int w, int h) {
    glViewport(0,0,w,h);
    width = w;
    height = h;
    m_projection = glm::perspective(70.0f, (float)w/h, 0.3f, 100.0f);
}
//===============================================
void GDrawQtLightAds::setMatrices() {
    glm::mat4 mv = m_view * m_modelView;
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", mv);
    GShader::Instance()->setUniform(m_program, "NormalMatrix", glm::mat3(glm::vec3(mv[0]), glm::vec3(mv[1]), glm::vec3(mv[2])));
    GShader::Instance()->setUniform(m_program, "MVP", m_projection * mv);
}
//===============================================
