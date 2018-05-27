//===============================================
#ifndef _GObjCabin_
#define _GObjCabin_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//===============================================
class GObjCabin {
public:
    GObjCabin();
    GObjCabin(const char* Wall, const char* Roof);
    ~GObjCabin();

public:
    void initObject(const char* Wall, const char* Roof);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 33;
    float m_vertices[VERTEX_MAX*3];
    float m_texCoords[VERTEX_MAX*2];
    GLuint m_program;
    QMap<QString, GLuint> m_textureMap;
};
//===============================================
#endif
//===============================================
