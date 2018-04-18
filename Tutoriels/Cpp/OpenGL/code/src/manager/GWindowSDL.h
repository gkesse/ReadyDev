//===============================================
#ifndef _GWindowSDL_
#define _GWindowSDL_
//===============================================
#include "GInclude.h"
#include "GWindow.h"
//===============================================
class GWindowSDL : public GWindow {
public:
    GWindowSDL();
    ~GWindowSDL();

public:
    static GWindowSDL* Instance();
    void show(int* argc=0, char** argv=0);

private:
    static GWindowSDL* m_instance;
    int m_x;
    int m_y;
    int m_w;
    int m_h;
    string m_title;
    SDL_Window* m_window;
};
//===============================================
#endif
//===============================================
