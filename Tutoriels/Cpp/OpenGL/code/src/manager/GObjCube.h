//===============================================
#ifndef _GObjCube_
#define _GObjCube_
//================================================
#include "GInclude.h"
//===============================================
class GObjCube {
public:
    GObjCube();
    GObjCube(float Size);
    ~GObjCube();

public:
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    float m_vertices[108];
    float m_colors[108];
    GLuint m_program;
};
//===============================================
#endif
//===============================================
