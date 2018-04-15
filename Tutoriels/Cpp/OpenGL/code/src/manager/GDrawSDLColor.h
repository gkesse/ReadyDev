//===============================================
#ifndef _GDrawSDLColor_
#define _GDrawSDLColor_
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
class GDrawSDLColor : public GDraw {
public:
    GDrawSDLColor();
    ~GDrawSDLColor();

public:
    static GDrawSDLColor* Instance();
    void initDraw();
    void draw();

private:
    static GDrawSDLColor* m_instance;
    float m_vertices[VERTICES_BUFFER_MAX];
    float m_colors[VERTICES_BUFFER_MAX];
    GLuint m_program;
};
//===============================================
#endif
//===============================================
