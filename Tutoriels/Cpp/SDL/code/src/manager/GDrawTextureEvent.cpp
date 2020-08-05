//================================================
#include "GDrawTextureEvent.h"
#include "GTexture.h"
#include "GWindow.h"
#include "GEvent.h"
//================================================
GDrawTextureEvent* GDrawTextureEvent::m_instance = 0;
//================================================
GDrawTextureEvent::GDrawTextureEvent() {

}
//================================================
GDrawTextureEvent::~GDrawTextureEvent() {

}
//================================================
GDrawTextureEvent* GDrawTextureEvent::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTextureEvent;
    }
    return m_instance;
}
//================================================
void GDrawTextureEvent::initDraw() {
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
void GDrawTextureEvent::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");

    SDL_RenderCopy(lRenderer, lTexture, &m_srcRect, &m_dstRect);
}
//================================================
void GDrawTextureEvent::update() {
    m_srcRect.x = 128 * int(((SDL_GetTicks() / 100) % 6));
}
//================================================
void GDrawTextureEvent::onKeyDown(SDL_Event* event) {
    int lFactor = 3;
    switch(event->key.keysym.sym) {
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
