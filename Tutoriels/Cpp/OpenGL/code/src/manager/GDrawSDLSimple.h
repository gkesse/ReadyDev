//===============================================
#ifndef _GDrawSDLSimple_
#define _GDrawSDLSimple_
//================================================
#include "GOpenGL.h"
#include "GDraw.h"
//===============================================
#include <QString>
//===============================================
#define VERTICES_BUFFER_MAX (256)
//===============================================
class GDrawSDLSimple : public GDraw {
public:
    GDrawSDLSimple();
    ~GDrawSDLSimple();

public:
    static GDrawSDLSimple* Instance();
    void initDraw();
    void draw();

private:
    static GDrawSDLSimple* m_instance;
    float m_vertices[VERTICES_BUFFER_MAX];
    float m_colors[VERTICES_BUFFER_MAX];
    GLuint m_program;
};
//===============================================
#endif
//===============================================
