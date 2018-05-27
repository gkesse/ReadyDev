//===============================================
#ifndef _GObjCrystal_
#define _GObjCrystal_
//================================================
#include "GInclude.h"
//===============================================
class GObjCrystal {
public:
    GObjCrystal();
    GObjCrystal(const char* Crystal);
    ~GObjCrystal();

public:
    void initObject(const char* Crystal);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 24;
    float m_vertices[VERTEX_MAX*3];
    float m_texCoords[VERTEX_MAX*2];
    GLuint m_program;
    QMap<QString, GLuint> m_textureMap;
};
//===============================================
#endif
//===============================================
