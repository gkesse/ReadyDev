//===============================================
#include "GDrawSDLTextureVao.h"
#include "GEvent.h"
#include "GCamera.h"
//===============================================
GDrawSDLTextureVao* GDrawSDLTextureVao::m_instance = 0;
//===============================================
GDrawSDLTextureVao::GDrawSDLTextureVao() {

}
//===============================================
GDrawSDLTextureVao::~GDrawSDLTextureVao() {

}
//===============================================
GDrawSDLTextureVao* GDrawSDLTextureVao::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLTextureVao;
    }
    return m_instance;
}
//===============================================
void GDrawSDLTextureVao::initDraw() {
    m_objBoxVao = GObjBoxVao(1.0f, "res/img/box.jpg");
    m_angle = 0.0f;
}
//===============================================
void GDrawSDLTextureVao::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(3.0f, 3.0f, 3.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawSDLTextureVao::updateDraw() {
    m_angle += 1.0f;
    if(m_angle >= 360.0f) {m_angle -= 360.0f;}
}
//===============================================
void GDrawSDLTextureVao::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    m_modelView = lView;
    m_modelView = glm::rotate(m_modelView, glm::radians(m_angle), glm::vec3(0.0f,1.0f,0.0f));
    m_objBoxVao.draw(m_projection, m_modelView);
}
//===============================================
void GDrawSDLTextureVao::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//===============================================
void GDrawSDLTextureVao::onKeyDown(SDL_Event* event) {
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
