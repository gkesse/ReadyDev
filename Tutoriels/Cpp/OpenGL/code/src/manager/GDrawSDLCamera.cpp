//===============================================
#include "GDrawSDLCamera.h"
#include "GEvent.h"
#include "GCameraSDL.h"
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
    GCameraSDL::Instance()->initCamera(glm::vec3(10.0f, 10.0f, 10.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 4.0f, 0.5f);
    GCameraSDL::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawSDLCamera::draw() {
    GCameraSDL::Instance()->lookAt(m_modelView);
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
void GDrawSDLCamera::orientateBox(const char* direction) {
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
        orientateBox("UP");
    }
    if(event->key.keysym.sym == SDLK_c) {
        orientateBox("DOWN");
    }
    if(event->key.keysym.sym == SDLK_d) {
        orientateBox("LEFT");
    }
    if(event->key.keysym.sym == SDLK_f) {
        orientateBox("RIGHT");
    }
    if(event->key.keysym.sym == SDLK_UP) {
        GCameraSDL::Instance()->deplacer("UP");
    }
    if(event->key.keysym.sym == SDLK_DOWN) {
        GCameraSDL::Instance()->deplacer("DOWN");
    }
    if(event->key.keysym.sym == SDLK_LEFT) {
        GCameraSDL::Instance()->deplacer("LEFT");
    }
    if(event->key.keysym.sym == SDLK_RIGHT) {
        GCameraSDL::Instance()->deplacer("RIGHT");
    }
    if(event->key.keysym.sym == SDLK_z) {
        GCameraSDL::Instance()->orienter("UP");
    }
    if(event->key.keysym.sym == SDLK_w) {
        GCameraSDL::Instance()->orienter("DOWN");
    }
    if(event->key.keysym.sym == SDLK_q) {
        GCameraSDL::Instance()->orienter("LEFT");
    }
    if(event->key.keysym.sym == SDLK_s) {
        GCameraSDL::Instance()->orienter("RIGHT");
    }
}
//===============================================
