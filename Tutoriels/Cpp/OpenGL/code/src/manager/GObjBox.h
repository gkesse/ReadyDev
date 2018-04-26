//===============================================
#ifndef _GObjBox_
#define _GObjBox_
//================================================
#include "GInclude.h"
//===============================================
class GObjBox {
public:
    GObjBox();
    GObjBox(float Size);
    GObjBox(float Size, const char* img);
    ~GObjBox();

public:
    void initObject(float Size, const char* img);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    float m_vertices[108];
    float m_texCoords[72];
    GLuint m_program;
    GLuint m_texture;
};
//===============================================
#endif
//===============================================
