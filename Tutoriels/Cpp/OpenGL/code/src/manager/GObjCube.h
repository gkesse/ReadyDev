//===============================================
#ifndef _GObjCube_
#define _GObjCube_
//================================================
#include "GDraw.h"
//===============================================
class GObjCube : public GDraw {
public:
    GObjCube(float Size);
    ~GObjCube();

private:
    float m_vertices[108];
    float m_colors[108];
    GLuint m_program;
};
//===============================================
#endif
//===============================================
