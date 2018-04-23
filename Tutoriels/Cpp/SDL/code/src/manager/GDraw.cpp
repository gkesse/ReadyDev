//================================================
#include "GDraw.h"
#include "GDrawBackground.h"
#include "GDrawTexture.h"
#include "GDrawTextureReduceMove.h"
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
    if(m_type == "BACKGROUND") return GDrawBackground::Instance();
    if(m_type == "TEXTURE") return GDrawTexture::Instance();
    if(m_type == "TEXTURE_REDUCE_MOVE") return GDrawTextureReduceMove::Instance();
    if(m_type == "ANIMATE") return GDrawAnimate::Instance();

    return 0;
}
//================================================
void GDraw::initDraw() {}
void GDraw::draw() {}
void GDraw::update() {}
//================================================
