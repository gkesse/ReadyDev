//===============================================
#ifndef _GObjBox_
#define _GObjBox_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//===============================================
class GObjBox {
public:
    GObjBox();
    GObjBox(float Size, const char* Box);
    ~GObjBox();

public:
    void initObject(float Size, const char* Box);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 36;
    float m_vertices[VERTEX_MAX*3];
    float m_texCoords[VERTEX_MAX*2];
    GLuint m_program;
    QMap<QString, GLuint> m_textureMap;
};
//===============================================
#endif
//===============================================
