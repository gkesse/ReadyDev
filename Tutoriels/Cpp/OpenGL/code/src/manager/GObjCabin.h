//===============================================
#ifndef _GObjCabin_
#define _GObjCabin_
//================================================
#include "GInclude.h"
//===============================================
class GObjCabin {
public:
    GObjCabin();
    GObjCabin(const char* img);
    ~GObjCabin();

public:
    void initObject(const char* img);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 18;
    //===============================================
    float m_vertices[VERTEX_MAX*3];
    float m_texCoords[VERTEX_MAX*2];
    GLuint m_program;
    GLuint m_texture;
};
//===============================================
#endif
//===============================================
