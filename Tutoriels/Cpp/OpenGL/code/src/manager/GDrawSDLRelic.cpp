//===============================================
#include "GDrawSDLRelic.h"
#include "GEvent.h"
#include "GCamera.h"
//===============================================
#include <QtMath>
//===============================================
GDrawSDLRelic* GDrawSDLRelic::m_instance = 0;
//===============================================
GDrawSDLRelic::GDrawSDLRelic() {

}
//===============================================
GDrawSDLRelic::~GDrawSDLRelic() {

}
//===============================================
GDrawSDLRelic* GDrawSDLRelic::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLRelic;
    }
    return m_instance;
}
//===============================================
void GDrawSDLRelic::initDraw() {
    m_objCabin = GObjCabin("res/img/wall.jpg", "res/img/roof.jpg");
    m_objGround = GObjGround(30, 30, "res/img/ground.jpg");
    m_objGround2 = GObjGround(60, 60, "res/img/grass.jpg");
    m_objCrystal = GObjCrystal("res/img/grass.jpg");
}
//===============================================
void GDrawSDLRelic::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(10.0f, 10.0f, 10.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 4.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawSDLRelic::draw() {
    GCamera::Instance()->lookAt(m_modelView);
    glm::mat4 lModelView = m_modelView;
    m_objCabin.draw(m_projection, m_modelView);
    m_objGround.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_modelView = glm::translate(m_modelView, glm::vec3(0.0f,-0.01f,0.0f));
    m_objGround2.draw(m_projection, m_modelView);
    m_modelView = lModelView;
    m_objCrystal.draw(m_projection, m_modelView);
}
//===============================================
void GDrawSDLRelic::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//===============================================
void GDrawSDLRelic::onKeyDown(SDL_Event* event) {
    // move camera
    if(event->key.keysym.sym == SDLK_KP_8) {
        GCamera::Instance()->move("UP");
    }
    if(event->key.keysym.sym == SDLK_KP_2) {
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
    // rotate camera
    if(event->key.keysym.sym == SDLK_z) {
        GCamera::Instance()->rotate("UP");
    }
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
