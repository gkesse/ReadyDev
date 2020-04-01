//================================================
#include "GDrawTextureFull.h"
#include "GTexture.h"
#include "GWindow.h"
//================================================
GDrawTextureFull* GDrawTextureFull::m_instance = 0;
//================================================
GDrawTextureFull::GDrawTextureFull() {

}
//================================================
GDrawTextureFull::~GDrawTextureFull() {

}
//================================================
GDrawTextureFull* GDrawTextureFull::Instance() {
    if(m_instance == 0) {
        m_instance = new GDrawTextureFull;
    }
    return m_instance;
}
//================================================
void GDrawTextureFull::initDraw() {
    GTextureInfo lTextureInfo[] {
        {"TEXTURE", "res/img/rider.bmp"},
        {"END", ""}
    };
    GTexture::Instance()->loadTexture(lTextureInfo);
}
//================================================
void GDrawTextureFull::draw() {
    SDL_Renderer* lRenderer = GWindow::Instance()->getRenderer();
    SDL_Texture* lTexture = GTexture::Instance()->getTexture("TEXTURE");
    SDL_RenderCopy(lRenderer, lTexture, 0, 0);
}
//================================================
