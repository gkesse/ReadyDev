//===============================================
#include "GEvent.h"
#include "GDraw.h"
//===============================================
GEvent* GEvent::m_instance = 0;
//===============================================
GEvent::GEvent() {

}
//===============================================
GEvent::~GEvent() {

}
//===============================================
GEvent* GEvent::Instance() {
    if(m_instance == 0) {
        m_instance = new GEvent;
    }
    return m_instance;
}
//===============================================
void GEvent::handleEvents(SDL_Event* event) {
    switch(event->type){
        case SDL_KEYDOWN:
            //cout << "KEY: " << SDL_GetKeyName(event->key.keysym.sym) << "\n";
            GDraw::Instance()->onKeyDown(event);
            break;
        case SDL_MOUSEMOTION:
            GDraw::Instance()->onMouseMotion(event);
            break;
        case SDL_MOUSEBUTTONDOWN:
            GDraw::Instance()->onMouseButtonDown(event);
            break;
        case SDL_MOUSEWHEEL:
            GDraw::Instance()->onMouseWheel(event);
            break;
    }
}
//===============================================
