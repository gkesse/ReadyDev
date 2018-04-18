//===============================================
#ifndef _GDrawSDLColorWr_
#define _GDrawSDLColorWr_
//================================================
#include "GInclude.h"
#include "GDrawSDL.h"
//===============================================
class GDrawSDLColorWr : public GDrawSDL {
public:
    GDrawSDLColorWr();
    ~GDrawSDLColorWr();

public:
    static GDrawSDLColorWr* Instance();
    void initDraw();
    void draw();

private:
    static GDrawSDLColorWr* m_instance;
    float m_vertices[6];
    float m_colors[9];
    GLuint m_buffers[2];
    GLuint m_program;
};
//===============================================
#endif
//===============================================
