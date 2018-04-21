//===============================================
#include "GDrawQtLightDiffuse.h"
#include "GShader.h"
#include "GConfig.h"
//===============================================
GDrawQtLightDiffuse* GDrawQtLightDiffuse::m_instance = 0;
//===============================================
GDrawQtLightDiffuse::GDrawQtLightDiffuse() {

}
//===============================================
GDrawQtLightDiffuse::~GDrawQtLightDiffuse() {
    m_angle = 0.0;
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

    glEnable(GL_DEPTH_TEST);

    torus = new GTorus(0.7f, 0.3f, 4, 4);

    model = glm::mat4(1.0f);
    model *= glm::rotate(0.0f, glm::vec3(1.0f,0.0f,0.0f));
    model *= glm::rotate(0.0f, glm::vec3(0.0f,1.0f,0.0f));
    view = glm::lookAt(glm::vec3(0.0f,0.0f,3.0f), glm::vec3(0.0f,0.0f,0.0f), glm::vec3(0.0f,1.0f,0.0f));
    projection = glm::mat4(1.0f);

    GShader::Instance()->setUniform("Kd", 0.9f, 0.5f, 0.3f);
    GShader::Instance()->setUniform("Ld", 1.0f, 1.0f, 1.0f);
    GShader::Instance()->setUniform("LightPosition", view * glm::vec4(5.0f,5.0f,2.0f,1.0f));

}
//===============================================
void GDrawQtLightDiffuse::draw() {
    setMatrices();
    torus->render();
}
//===============================================
void GDrawQtLightDiffuse::resize(int w, int h) {
    glViewport(0,0,w,h);
    width = w;
    height = h;
    projection = glm::perspective(70.0f, (float)w/h, 0.3f, 100.0f);
}
//===============================================
void GDrawQtLightDiffuse::setMatrices() {
    glm::mat4 mv = view * model;
    GShader::Instance()->setUniform("ModelViewMatrix", mv);
    GShader::Instance()->setUniform("NormalMatrix", glm::mat3(glm::vec3(mv[0]), glm::vec3(mv[1]), glm::vec3(mv[2])));
    GShader::Instance()->setUniform("MVP", projection * mv);
}
//===============================================
