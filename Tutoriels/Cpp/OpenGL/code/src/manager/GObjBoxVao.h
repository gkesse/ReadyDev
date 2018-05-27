//===============================================
#ifndef _GObjBoxVao_
#define _GObjBoxVao_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//===============================================
class GObjBoxVao {
public:
    GObjBoxVao();
    GObjBoxVao(float Size, const char* Box);
    ~GObjBoxVao();

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
