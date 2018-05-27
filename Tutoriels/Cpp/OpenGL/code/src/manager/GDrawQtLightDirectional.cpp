//===============================================
#include "GDrawQtLightDirectional.h"
#include "GShader.h"
#include "GCamera.h"
//===============================================
GDrawQtLightDirectional* GDrawQtLightDirectional::m_instance = 0;
//===============================================
GDrawQtLightDirectional::GDrawQtLightDirectional() {

}
//===============================================
GDrawQtLightDirectional::~GDrawQtLightDirectional() {

}
//===============================================
GDrawQtLightDirectional* GDrawQtLightDirectional::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtLightDirectional;
    }
    return m_instance;
}
//===============================================
void GDrawQtLightDirectional::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_directional.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_directional.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    m_objTorus = new GObjTorus(0.7f, 0.3f, 50, 50);

    m_angle = 0.0f;
}
//===============================================
void GDrawQtLightDirectional::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(3.0f, 3.0f, 3.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawQtLightDirectional::updateCamera(int w, int h) {
    GCamera::Instance()->perspective(m_projection, w, h);
}
//===============================================
void GDrawQtLightDirectional::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {m_angle -= 360.0f;}
}
//===============================================
void GDrawQtLightDirectional::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    m_modelView = lView;
    GShader::Instance()->setUniform(m_program, "LightPosition", m_modelView * glm::vec4(1.0f, 0.0f, 0.0f, 0.0f) );
    GShader::Instance()->setUniform(m_program, "LightIntensity", glm::vec3(0.8f,0.8f,0.8f) );
    GShader::Instance()->setUniform(m_program, "Kd", 0.8f, 0.8f, 0.8f);
    GShader::Instance()->setUniform(m_program, "Ks", 0.9f, 0.9f, 0.9f);
    GShader::Instance()->setUniform(m_program, "Ka", 0.1f, 0.1f, 0.1f);
    GShader::Instance()->setUniform(m_program, "Shininess", 180.0f);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f, 1.0f, 0.0f));
    m_objTorus->draw(m_program, m_projection, m_modelView);
}
//===============================================
void GDrawQtLightDirectional::onKeyPress(QKeyEvent* event) {
    // Camera Move
    if(event->key() == Qt::Key_8) {
        GCamera::Instance()->move("UP");
    }
    if(event->key() == Qt::Key_2) {
        GCamera::Instance()->move("DOWN");
    }
    if(event->key() == Qt::Key_Up) {
        GCamera::Instance()->move("FORWARD");
    }
    if(event->key() == Qt::Key_Down) {
        GCamera::Instance()->move("BACKWARD");
    }
    if(event->key() == Qt::Key_Left) {
        GCamera::Instance()->move("LEFT");
    }
    if(event->key() == Qt::Key_Right) {
        GCamera::Instance()->move("RIGHT");
    }
    // Camera Rotate
    if(event->key() == Qt::Key_Z) {
        GCamera::Instance()->rotate("UP");
    }
    if(event->key() == Qt::Key_W) {
        GCamera::Instance()->rotate("DOWN");
    }
    if(event->key() == Qt::Key_Q) {
        GCamera::Instance()->rotate("LEFT");
    }
    if(event->key() == Qt::Key_S) {
        GCamera::Instance()->rotate("RIGHT");
    }
}
//===============================================
