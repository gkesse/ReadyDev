//===============================================
#ifndef _GDrawSDL_
#define _GDrawSDL_
//================================================
#include "GOpenGL.h"
#include "GDraw.h"
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
