//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include "GInclude.h"
//================================================
#include <QString>
//================================================
class GWindow {
public:
    GWindow();
    ~GWindow();

public:
    static GWindow* Instance();
    void show();
    void initDraw();
    void setCenter();
    void clean();
    void render();
    void handleEvents();
    void update();

private:
    static GWindow* m_instance;
    SDL_Window* m_window;
    SDL_Renderer* m_renderer;
    QString m_title;
    int m_xPos;
    int m_yPos;
    int m_width;
    int m_height;
    Uint32 m_flags;
    bool m_running;
};
//================================================
#endif
//================================================
