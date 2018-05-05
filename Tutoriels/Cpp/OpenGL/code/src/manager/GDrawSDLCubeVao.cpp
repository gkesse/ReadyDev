//===============================================
#include "GDrawSDLCubeVao.h"
#include "GEvent.h"
#include "GCamera.h"
//===============================================
GDrawSDLCubeVao* GDrawSDLCubeVao::m_instance = 0;
//===============================================
GDrawSDLCubeVao::GDrawSDLCubeVao() {

}
//===============================================
GDrawSDLCubeVao::~GDrawSDLCubeVao() {

}
//===============================================
GDrawSDLCubeVao* GDrawSDLCubeVao::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawSDLCubeVao;
    }
    return m_instance;
}
//===============================================
void GDrawSDLCubeVao::initDraw() {
    m_objCubeVao = GObjCubeVao(1.0f);
}
//===============================================
void GDrawSDLCubeVao::initCamera(int width, int height) {
    GCamera::Instance()->initCamera(glm::vec3(3.0f, 3.0f, 3.0f), glm::vec3(0.0f, 0.0f, 0.0f), glm::vec3(0.0f, 1.0f, 0.0f), 5.0f, 0.5f);
    GCamera::Instance()->perspective(m_projection, width, height);
}
//===============================================
void GDrawSDLCubeVao::draw() {
    glm::mat4 lView;
    GCamera::Instance()->lookAt(lView);
    m_modelView = lView;
    m_objCubeVao.draw(m_projection, m_modelView);
}
//===============================================
void GDrawSDLCubeVao::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//===============================================
void GDrawSDLCubeVao::onKeyDown(SDL_Event* event) {
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
