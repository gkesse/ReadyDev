//===============================================
#include "GWindowSDL.h"
//===============================================
GWindowSDL* GWindowSDL::m_instance = 0;
//===============================================
GWindowSDL::GWindowSDL() {
    m_x = SDL_WINDOWPOS_CENTERED;
    m_y = SDL_WINDOWPOS_CENTERED;
    m_w = 400;
    m_h = 400;
    m_title = "OpenGL | SDL | ReadyDev";
}
//===============================================
GWindowSDL::~GWindowSDL() {

}
//===============================================
GWindowSDL *GWindowSDL::Instance() {
    if(m_instance == 0) {
        m_instance = new GWindowSDL;
    }
    return m_instance;
}
//===============================================
void GWindowSDL::show(int* argc, char** argv) {
    SDL_Init(SDL_INIT_VIDEO);
    SDL_GL_SetAttribute(SDL_GL_CONTEXT_MAJOR_VERSION, 3);
    SDL_GL_SetAttribute(SDL_GL_CONTEXT_MINOR_VERSION, 1);
    SDL_GL_SetAttribute(SDL_GL_DOUBLEBUFFER, 1);
    SDL_GL_SetAttribute(SDL_GL_DEPTH_SIZE, 24);
    m_window = SDL_CreateWindow(m_title.c_str(), m_x, m_y, m_w, m_h, SDL_WINDOW_SHOWN | SDL_WINDOW_OPENGL);
    SDL_GLContext m_context = SDL_GL_CreateContext(m_window);
    glewInit();
    initDraw();
    SDL_Event m_event;
    while(1) {
        SDL_WaitEvent(&m_event);
        if(m_event.window.event == SDL_WINDOWEVENT_CLOSE) break;
        setBackground();
        glClear(GL_COLOR_BUFFER_BIT);
        draw();
        SDL_GL_SwapWindow(m_window);
    }
    SDL_GL_DeleteContext(m_context);
    SDL_DestroyWindow(m_window);
    SDL_Quit();
}
//===============================================
