//===============================================
#include "GDrawQtLightADS.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtLightADS* GDrawQtLightADS::m_instance = 0;
//===============================================
GDrawQtLightADS::GDrawQtLightADS() {

}
//===============================================
GDrawQtLightADS::~GDrawQtLightADS() {
    m_angle = 0.0;
}
//===============================================
GDrawQtLightADS* GDrawQtLightADS::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLightADS;
    }
    return m_instance;
}
//===============================================
void GDrawQtLightADS::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_diffuse.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_diffuse.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    glEnable(GL_DEPTH_TEST);

    m_torus = new GTorus(0.7f, 0.3f, 30, 30);

    m_model = glm::mat4(1.0f);
    m_model *= glm::rotate(-35.0f, glm::vec3(1.0f,0.0f,0.0f));
    m_model *= glm::rotate(35.0f, glm::vec3(0.0f,1.0f,0.0f));
    m_view = glm::lookAt(glm::vec3(0.0f,0.0f,3.0f), glm::vec3(0.0f,0.0f,0.0f), glm::vec3(0.0f,1.0f,0.0f));
    m_projection = glm::mat4(1.0f);

    GShader::Instance()->setUniform(m_program, "Kd", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform(m_program, "Ld", 1.0f, 1.0f, 1.0f);
    GShader::Instance()->setUniform(m_program, "LightPosition", m_view * glm::vec4(5.0f,5.0f,2.0f,1.0f));
}
//===============================================
void GDrawQtLightADS::draw() {
    setMatrices();
    m_torus->render();
}
//===============================================
void GDrawQtLightADS::resize(int w, int h) {
    glViewport(0,0,w,h);
    width = w;
    height = h;
    m_projection = glm::perspective(70.0f, (float)w/h, 0.3f, 100.0f);
}
//===============================================
void GDrawQtLightADS::setMatrices() {
    glm::mat4 mv = m_view * m_model;
    GShader::Instance()->setUniform(m_program, "ModelViewMatrix", mv);
    GShader::Instance()->setUniform(m_program, "NormalMatrix", glm::mat3(glm::vec3(mv[0]), glm::vec3(mv[1]), glm::vec3(mv[2])));
    GShader::Instance()->setUniform(m_program, "MVP", m_projection * mv);
}
//===============================================