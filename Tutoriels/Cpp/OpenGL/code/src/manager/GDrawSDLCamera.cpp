//===============================================
#include "GDrawSDLCamera.h"
#include "GEvent.h"
#include "GCamera.h"
//===============================================
#include <QtMath>
//===============================================
GDrawSDLCamera* GDrawSDLCamera::m_instance = 0;
//===============================================
GDrawSDLCamera::GDrawSDLCamera() {

}
//===============================================
GDrawSDLCamera::~GDrawSDLCamera() {

}
//===============================================
GDrawSDLCamera* GDrawSDLCamera::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLCamera;
    }
    return m_instance;
}
//===============================================
void GDrawSDLCamera::initDraw() {
    m_objBox = GObjBox(1.0f);
    m_objBox2 = GObjBox(1.0f, "res/img/box2.jpg");
    m_objLand = GObjLand(20.0f);
    m_angleU = 0.0f;
    m_angleV = 0.0f;
}
//===============================================
void GDrawSDLCamera::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(10.0f, 10.0f, 10.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 4.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawSDLCamera::draw() {
    GCamera::Instance()->lookAt(m_modelView);
    glm::mat4 lModelView = m_modelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(0.0f,3.0f,0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angleU), glm::vec3(0.0f,1.0f,0.0f));
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angleV), glm::vec3(1.0f,0.0f,0.0f));
    m_objBox.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(3.0f,0.0f,0.0f));
    m_objBox2.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(-3.0f,0.0f,0.0f));
    m_objBox2.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(3.0f,0.0f,0.0f));
    m_objBox2.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(0.0f,0.0f,3.0f));
    m_objBox2.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(0.0f,0.0f,-3.0f));
    m_objBox2.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(0.0f,-3.0f,0.0f));
    m_objLand.draw(m_projection, m_modelView);
}
//===============================================
void GDrawSDLCamera::rotateBox(const char* direction) {
    float lAngle = 10.0f;
    if(QString(direction) == "UP") {m_angleV += lAngle;}
    if(QString(direction) == "DOWN") {m_angleV -= lAngle;}
    if(QString(direction) == "LEFT") {m_angleU -= lAngle;}
    if(QString(direction) == "RIGHT") {m_angleU += lAngle;}
    if(m_angleU >= 360.0f) {m_angleU -= 360.0f;}
    if(m_angleU <= 0.0f) {m_angleU += 360.0f;}
    if(m_angleV >= 360.0f) {m_angleV -= 360.0f;}
    if(m_angleV <= 0.0f) {m_angleV += 360.0f;}
}
//===============================================
void GDrawSDLCamera::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//===============================================
void GDrawSDLCamera::onKeyDown(SDL_Event* event) {
    if(event->key.keysym.sym == SDLK_r) {
        rotateBox("UP");
    }
    if(event->key.keysym.sym == SDLK_c) {
        rotateBox("DOWN");
    }
    if(event->key.keysym.sym == SDLK_d) {
        rotateBox("LEFT");
    }
    if(event->key.keysym.sym == SDLK_f) {
        rotateBox("RIGHT");
    }
    // move camera
    if(event->key.keysym.sym == SDLK_KP_8) {
        GCamera::Instance()->move("UP");
    }
    if(event->key.keysym.sym == SDLK_KP_0) {
        GCamera::Instance()->move("DOWN");
    }
    if(event->key.keysym.sym == SDLK_UP) {
        GCamera::Instance()->move("FORWARD");
    }
    if(event->key.keysym.sym == SDLK_DOWN) {
        GCamera::Instance()->move("BACKWARD");
    }
    if(event->key.keysym.sym == SDLK_LEFT) {
        GCamera::Instance()->move("LEFT");
    }
    if(event->key.keysym.sym == SDLK_RIGHT) {
        GCamera::Instance()->move("RIGHT");
    }
    if(event->key.keysym.sym == SDLK_z) {
        GCamera::Instance()->rotate("UP");
    }
    // rotate camera
    if(event->key.keysym.sym == SDLK_w) {
        GCamera::Instance()->rotate("DOWN");
    }
    if(event->key.keysym.sym == SDLK_q) {
        GCamera::Instance()->rotate("LEFT");
    }
    if(event->key.keysym.sym == SDLK_s) {
        GCamera::Instance()->rotate("RIGHT");
    }
}
//===============================================
