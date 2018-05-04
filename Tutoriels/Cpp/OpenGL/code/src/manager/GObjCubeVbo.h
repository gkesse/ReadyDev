//===============================================
#ifndef _GObjCubeVbo_
#define _GObjCubeVbo_
//================================================
#include "GInclude.h"
//===============================================
class GObjCubeVbo {
public:
    GObjCubeVbo();
    GObjCubeVbo(float Size);
    ~GObjCubeVbo();

public:
    void initObject(float Size);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 36;
    GLuint m_buffers[1];
    GLuint m_sizes[2];
    float m_vertices[VERTEX_MAX*3];
    float m_colors[VERTEX_MAX*3];
    GLuint m_program;
};
//===============================================
#endif
//===============================================
