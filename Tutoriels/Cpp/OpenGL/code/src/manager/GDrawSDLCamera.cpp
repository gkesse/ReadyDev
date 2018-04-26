//===============================================
#include "GDrawSDLCamera.h"
#include "GEvent.h"
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
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
}
//===============================================
void GDrawSDLCamera::draw() {
    m_modelView = glm::lookAt(glm::vec3(10.0f, 10.0f, 10.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
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
void GDrawSDLCamera::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//===============================================
void GDrawSDLCamera::onKeyDown(SDL_Event* event) {
    switch (event->key.keysym.sym) {
    case SDLK_RIGHT:
        m_angleU += 20*0.1f;
        if(m_angleU >= 360.0f) {
            m_angleU -= 360.0f;
        }
        break;
    case SDLK_LEFT:
        m_angleU -= 20*0.1f;
        if(m_angleU <= 0) {
            m_angleU += 360.0f;
        }
        break;
    case SDLK_UP:
        m_angleV += 20*0.1f;
        if(m_angleV >= 360.0f) {
            m_angleV -= 360.0f;
        }
        break;
    case SDLK_DOWN:
        m_angleV -= 20*0.1f;
        if(m_angleV <= 0) {
            m_angleV += 360.0f;
        }
        break;
    }
}
//===============================================
