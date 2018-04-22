//================================================
#include "GDraw.h"
#include "GTexture.h"
//================================================
GDraw* GDraw::m_instance = 0;
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {

}
//================================================
GDraw* GDraw::Instance() {
    if(m_instance == 0) {
        m_instance = new GDraw;
    }
    return m_instance;
}
//================================================
void GDraw::setRenderer(SDL_Renderer* renderer) {
    m_renderer = renderer;
}
//================================================
void GDraw::initDraw() {
    GTextureInfo lTextureInfo[] {
        {"ANIMATE", "res/img/animate-alpha.png"},
        {"END"}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);
}
//================================================
void GDraw::draw() {

}
//================================================
