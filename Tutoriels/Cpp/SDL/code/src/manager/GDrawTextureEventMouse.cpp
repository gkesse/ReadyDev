//================================================
#include "GDrawTextureEventMouse.h"
#include "GTexture.h"
#include "GWindow.h"
#include "GEvent.h"
//================================================
GDrawTextureEventMouse* GDrawTextureEventMouse::m_instance = 0;
//================================================
GDrawTextureEventMouse::GDrawTextureEventMouse() {

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

    SDL_RenderCopy(lRenderer, lTexture, &m_srcRect, &m_dstRect);
}
//================================================
void GDrawTextureEventMouse::update() {
    m_srcRect.x = 128 * int(((SDL_GetTicks() / 100) % 6));
}
//================================================
void GDrawTextureEventMouse::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//================================================
void GDrawTextureEventMouse::onKeyDown(SDL_Keycode keycode) {
    int lFactor = 3;
    switch(keycode) {
    case SDLK_UP:
        if(m_dstRect.y <= 0) m_dstRect.y = 0;
        else m_dstRect.y -= 1 * lFactor;
        break;
    case SDLK_DOWN:
        if(m_dstRect.y >= 400 - 82) m_dstRect.y = 400 - 82;
        else m_dstRect.y += 1 * lFactor;
        break;
    case SDLK_LEFT:
        if(m_dstRect.x <= 0) m_dstRect.x = 0;
        else m_dstRect.x -= 1 * lFactor;
        break;
    case SDLK_RIGHT:
        if(m_dstRect.x >= 400 - 128) m_dstRect.x = 400 - 128;
        else m_dstRect.x += 1 * lFactor;
        break;
    }
}
//================================================
