//===============================================
#ifndef _GDrawSDL_
#define _GDrawSDL_
//================================================
#include "GDraw.h"
//===============================================
#include <SDL2/SDL.h>
#include <GL/glew.h>
//===============================================
#include <QString>
//===============================================
#define VERTICES_BUFFER_MAX (256)
//===============================================
class GDrawSDL : public GDraw {
public:
    GDrawSDL();
    ~GDrawSDL();

public:
    static GDrawSDL* Instance();
    void initDraw();
    void draw();

private:
    static GDrawSDL* m_instance;
    float m_vertices[VERTICES_BUFFER_MAX];
    float m_colors[VERTICES_BUFFER_MAX];
    GLuint m_program;
};
//===============================================
#endif
//===============================================
