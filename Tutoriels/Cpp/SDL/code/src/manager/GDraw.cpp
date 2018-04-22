//================================================
#include "GDraw.h"
#include "GDrawTexture.h"
#include "GDrawTextureBmp.h"
#include "GDrawAnimate.h"
#include "GConfig.h"
//================================================
GDraw::GDraw() {

}
//================================================
GDraw::~GDraw() {

}
//================================================
GDraw* GDraw::Instance() {
    QString m_type = GConfig::Instance()->getData("DRAW_TYPE");
    if(m_type == "TEXTURE") return GDrawTexture::Instance();
    if(m_type == "TEXTURE_BMP") return GDrawTextureBmp::Instance();
    if(m_type == "ANIMATE") return GDrawAnimate::Instance();

    return 0;
}
//================================================
void GDraw::initDraw() { }
void GDraw::draw() { }
void GDraw::update() { }
//================================================
