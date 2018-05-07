//===============================================
#ifndef _GObjPlane_
#define _GObjPlane_
//================================================
#include "GInclude.h"
//===============================================
class GObjPlane {
public:
    GObjPlane();
    GObjPlane(float, float, int, int);
    ~GObjPlane();

public:
    void initObject(float, float, int, int);
    void draw(GLuint program, glm::mat4& projection, glm::mat4& modelview);

private:
    unsigned int vaoHandle;
    int faces;
};
//===============================================
#endif
//===============================================
