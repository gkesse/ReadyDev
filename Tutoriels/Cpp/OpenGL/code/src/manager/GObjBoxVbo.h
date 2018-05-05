//===============================================
#ifndef _GObjBoxVbo_
#define _GObjBoxVbo_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//===============================================
class GObjBoxVbo {
public:
    GObjBoxVbo();
    GObjBoxVbo(float Size, const char* Box);
    ~GObjBoxVbo();

public:
    void initObject(float Size, const char* Box);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 36;
    GLuint m_program;
    GLuint m_VAO;
    QMap<QString, GLuint> m_textureMap;
};
//===============================================
#endif
//===============================================
