//===============================================
#ifndef _GDrawSDL_
#define _GDrawSDL_
//================================================
#include "GDraw.h"
//===============================================
#include <SDL2/SDL.h>
#include <GL/glew.h>
//===============================================
#define VERTICES_BUFFER_MAX (256)
//===============================================
class GDrawSDL : public GDraw {
public:
    GDrawSDL();
    ~GDrawSDL();

public:
    static GDrawSDL* Instance();
    void setVertices();
    void draw();

private:
    static GDrawSDL* m_instance;
    float m_verticesMap[VERTICES_BUFFER_MAX];
};
//===============================================
#endif
//===============================================
