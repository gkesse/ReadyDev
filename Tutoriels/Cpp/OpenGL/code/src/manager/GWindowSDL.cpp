//===============================================
#include "GWindowSDL.h"
#include "GDraw.h"
//===============================================
GWindowSDL* GWindowSDL::m_instance = 0;
//===============================================
GWindowSDL::GWindowSDL() {
    m_x = SDL_WINDOWPOS_CENTERED;
    m_y = SDL_WINDOWPOS_CENTERED;
    m_w = 800;
    m_h = 800;
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
    SDL_GL_SetAttribute(SDL_GL_CONTEXT_MINOR_VERSION, 3);
    SDL_GL_SetAttribute(SDL_GL_CONTEXT_PROFILE_MASK, SDL_GL_CONTEXT_PROFILE_CORE);
    SDL_GL_SetAttribute(SDL_GL_DOUBLEBUFFER, 1);
    SDL_GL_SetAttribute(SDL_GL_DEPTH_SIZE, 24);
    m_window = SDL_CreateWindow(m_title.c_str(), m_x, m_y, m_w, m_h, SDL_WINDOW_SHOWN | SDL_WINDOW_OPENGL);
    SDL_GLContext lContext = SDL_GL_CreateContext(m_window);
    glewInit();
    showVersion();
    setBackground();
    GDraw::Instance()->initDraw();
    GDraw::Instance()->initCamera(m_w, m_h);
    glEnable(GL_DEPTH_TEST);
    SDL_Event lEvent;
    int FPS = 50;
    int DELAY_TIME = 1000/FPS;
    while(1) {
        Uint32 lStartTime = SDL_GetTicks();
        SDL_PollEvent(&lEvent);
        if(lEvent.window.event == SDL_WINDOWEVENT_CLOSE) break;
        GDraw::Instance()->handleEvents(&lEvent);
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
        GDraw::Instance()->updateDraw();
        GDraw::Instance()->draw();
        SDL_GL_SwapWindow(m_window);
        Uint32 lEndTime = SDL_GetTicks();
        Uint32 lDelayTime = lEndTime - lStartTime;
        if(lDelayTime < DELAY_TIME)
        SDL_Delay(DELAY_TIME - lDelayTime);
    }
    SDL_GL_DeleteContext(lContext);
    SDL_DestroyWindow(m_window);
    SDL_Quit();
}
//===============================================