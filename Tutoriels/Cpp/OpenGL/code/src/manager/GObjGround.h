//===============================================
#ifndef _GObjGround_
#define _GObjGround_
//================================================
#include "GInclude.h"
//===============================================
class GObjGround {
public:
    GObjGround();
    GObjGround(float Width, float Height, const char* Ground);
    ~GObjGround();

public:
    void initObject(float Width, float Height, const char* Ground);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 6;
    float m_vertices[VERTEX_MAX*3];
    float m_texCoords[VERTEX_MAX*2];
    GLuint m_program;
    GLuint m_texture;
};
//===============================================
#endif
//===============================================
