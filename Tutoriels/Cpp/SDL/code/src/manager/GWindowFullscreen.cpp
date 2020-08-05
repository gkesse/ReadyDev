//================================================
#include "GWindowFullscreen.h"
#include "GDraw.h"
#include "GConfig.h"
//================================================
GWindowFullscreen* GWindowFullscreen::m_instance = 0;
//================================================
GWindowFullscreen::GWindowFullscreen() {

}
//================================================
GWindowFullscreen::~GWindowFullscreen() {

}
//================================================
GWindowFullscreen* GWindowFullscreen::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowFullscreen;
    }
    return m_instance;
}
//================================================
void GWindowFullscreen::setFlags() {
    m_flags = SDL_WINDOW_FULLSCREEN;
}
//================================================
