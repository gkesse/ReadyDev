//===============================================
#include "GDrawSDLEvent.h"
#include "GShader.h"
#include "GEvent.h"
//===============================================
GDrawSDLEvent* GDrawSDLEvent::m_instance = 0;
//===============================================
GDrawSDLEvent::GDrawSDLEvent() {
    m_angle = 0.0f;
}
//===============================================
GDrawSDLEvent::~GDrawSDLEvent() {

}
//===============================================
GDrawSDLEvent* GDrawSDLEvent::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLEvent;
    }
    return m_instance;
}
//===============================================
void GDrawSDLEvent::initDraw() {
    m_objCube = GObjCube(1.0f);
}
//===============================================
void GDrawSDLEvent::initCamera(int width, int height) {
    float lRatio = (float)width/height;
    float lFoV = 70.0f;
    float lZNear = 0.1f;
    float lZFar = 100.0f;
    m_projection = glm::perspective(lFoV, lRatio, lZNear, lZFar);
    m_modelView = glm::mat4(1.0f);
}
//===============================================
void GDrawSDLEvent::draw() {
    m_modelView = glm::lookAt(glm::vec3(5.0f, 5.0f, 17.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f));
    glm::mat4 lModelView = m_modelView;
    m_objCube.draw(m_projection, m_modelView);
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f, 1.0f, 0.0f));
    m_modelView = glm::translate(m_modelView, glm::vec3(3.0f, 0.0f, 0.0f));
    m_objCube.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(6.0f, 0.0f, 0.0f));
    m_objCube.draw(m_projection, m_modelView);
}
//===============================================
void GDrawSDLEvent::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//===============================================
void GDrawSDLEvent::onKeyDown(SDL_Event* event) {
    switch (event->key.keysym.sym) {
    case SDLK_RIGHT:
        m_angle += 20*0.1f;
        if(m_angle >= 360.0f) {
            m_angle -= 360.0f;
        }
        break;
    case SDLK_LEFT:
        m_angle -= 20*0.1f;
        if(m_angle <= 0) {
            m_angle += 360.0f;
        }
        break;
    }
}
//===============================================
