//================================================
#include "GDrawTextureEventMouse.h"
#include "GTexture.h"
#include "GWindow.h"
#include "GEvent.h"
//================================================
GDrawTextureEventMouse* GDrawTextureEventMouse::m_instance = 0;
//================================================
GDrawTextureEventMouse::GDrawTextureEventMouse() {
    m_flip = SDL_FLIP_NONE;
}
//================================================
GDrawTextureEventMouse::~GDrawTextureEventMouse() {

}
//================================================
GDrawTextureEventMouse* GDrawTextureEventMouse::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTextureEventMouse;
    }
    return m_instance;
}
//================================================
void GDrawTextureEventMouse::initDraw() {
    SDL_Window* lWindow = GWindow::Instance()->getWindow();

    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/animate-alpha.png"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);

    m_srcRect.x = 0;
    m_srcRect.y = 0;
    m_srcRect.w = 128;
    m_srcRect.h = 82;

    m_dstRect.x = 0;
    m_dstRect.y = 0;
    m_dstRect.w = 128;
    m_dstRect.h = 82;
}
//================================================
void GDrawTextureEventMouse::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_RenderCopyEx(lRenderer, lTexture, &m_srcRect, &m_dstRect, 0, 0, m_flip);
}
//================================================
void GDrawTextureEventMouse::update() {
    m_srcRect.x = 128 * int(((SDL_GetTicks() / 100) % 6));
}
//================================================
void GDrawTextureEventMouse::onMouseMotion(SDL_Event* event) {
    int lX = event->motion.x;
    int lY = event->motion.y;
    int lXrel = event->motion.xrel;
    int lYrel = event->motion.yrel;
    m_dstRect.x = lX - (128 / 2);
    m_dstRect.y = lY - (82 / 2);
}
//================================================
void GDrawTextureEventMouse::onMouseButtonDown(SDL_Event* event) {
    switch(event->button.button) {
    case SDL_BUTTON_LEFT:
        m_flip = SDL_FLIP_HORIZONTAL;
        break;
    case SDL_BUTTON_MIDDLE:
        m_flip = SDL_FLIP_VERTICAL;
        break;
    case SDL_BUTTON_RIGHT:
        m_flip = SDL_FLIP_NONE;
        break;
    }
}
//================================================
