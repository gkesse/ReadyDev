//===============================================
#include "GDrawQtCamara.h"
#include "GShader.h"
#include "GCamera.h"
#include "GLight.h"
//===============================================
GDrawQtCamara* GDrawQtCamara::m_instance = 0;
//===============================================
GDrawQtCamara::GDrawQtCamara() {

}
//===============================================
GDrawQtCamara::~GDrawQtCamara() {

}
//===============================================
GDrawQtCamara* GDrawQtCamara::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawQtCamara;
    }
    return m_instance;
}
//===============================================
void GDrawQtCamara::initDraw() {
    GShaderInfo  m_shaders[] = {
        {GL_VERTEX_SHADER, "res/shaders/4.0/color_light_two_side_mix.vert", 0},
        {GL_FRAGMENT_SHADER, "res/shaders/4.0/color_light_two_side_mix.frag", 0},
        {GL_NONE, "", 0}
    };

    m_program = GShader::Instance()->loadShader(m_shaders);
    glUseProgram(m_program);

    glm::mat4 transform = glm::translate(glm::mat4(1.0f), glm::vec3(0.0f,1.5f,0.25f));
    m_objTeapot = new GObjTeapot(13, transform);
    m_angle = 0.0f;
}
//===============================================
void GDrawQtCamara::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(5.0f,1.0f,10.0f), glm::vec3(0.0f,0.0f,0.0f), glm::vec3(0.0f,1.0f,0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawQtCamara::updateCamera(int w, int h) {
    GCamera::Instance()->perspective(m_projection, w, h);
}
//===============================================
void GDrawQtCamara::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {m_angle -= 360.0f;}
}
//===============================================
void GDrawQtCamara::draw() {
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
void GDrawQtCamara::onKeyPress(QKeyEvent* event) {
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
