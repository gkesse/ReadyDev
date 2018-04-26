//===============================================
#ifndef _GObjLand_
#define _GObjLand_
//================================================
#include "GInclude.h"
//===============================================
class GObjLand {
public:
    GObjLand();
    GObjLand(float Size);
    GObjLand(float Size, const char* img);
    ~GObjLand();

public:
    void initObject(float Size, const char* img);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    float m_vertices[18];
    float m_texCoords[12];
    GLuint m_program;
    GLuint m_texture;
};
//===============================================
#endif
//===============================================
