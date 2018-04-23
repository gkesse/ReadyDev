//================================================
#include "GDraw.h"
#include "GDrawBackground.h"
#include "GDrawTexture.h"
#include "GDrawTextureReduceMove.h"
#include "GDrawTextureFull.h"
#include "GDrawTextureAnimate.h"
#include "GDrawTextureFlip.h"
#include "GDrawTextureEvent.h"
#include "GDrawTextureEventMouse.h"
#include "GConfig.h"
#include "GEvent.h"
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {

}
//================================================
GDraw* GDraw::Instance() {
    QString m_type = GConfig::Instance()->getData("DRAW_TYPE");
    if(m_type == "BACKGROUND") return GDrawBackground::Instance();
    if(m_type == "TEXTURE") return GDrawTexture::Instance();
    if(m_type == "TEXTURE_REDUCE_MOVE") return GDrawTextureReduceMove::Instance();
    if(m_type == "TEXTURE_FULL") return GDrawTextureFull::Instance();
    if(m_type == "TEXTURE_ANIMATE") return GDrawTextureAnimate::Instance();
    if(m_type == "TEXTURE_FLIP") return GDrawTextureFlip::Instance();
    if(m_type == "TEXTURE_EVENT") return GDrawTextureEvent::Instance();
    if(m_type == "TEXTURE_EVENT_MOUSE") return GDrawTextureEventMouse::Instance();
    return 0;
}
//================================================
void GDraw::handleEvents(SDL_Event* event) {
    GEvent::Instance()->handleEvents(event);
}
//================================================
void GDraw::initDraw() {}
void GDraw::draw() {}
void GDraw::update() {}
void GDraw::onKeyDown(SDL_Event* event) {}
void GDraw::onMouseMotion(SDL_Event* event) {}
void GDraw::onMouseButtonDown(SDL_Event* event) {}
//================================================
