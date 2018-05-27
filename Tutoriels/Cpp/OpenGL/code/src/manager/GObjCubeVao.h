//===============================================
#ifndef _GObjCubeVao_
#define _GObjCubeVao_
//================================================
#include "GInclude.h"
//===============================================
class GObjCubeVao {
public:
    GObjCubeVao();
    GObjCubeVao(float Size);
    ~GObjCubeVao();

public:
    void initObject(float Size);
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 36;
    GLuint m_program;
    GLuint m_VAO;
};
//===============================================
#endif
//===============================================
