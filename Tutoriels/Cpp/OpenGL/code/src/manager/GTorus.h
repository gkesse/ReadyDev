//===============================================
#ifndef _GTorus_
#define _GTorus_
//================================================
#include "GInclude.h"
//===============================================
class GTorus {
public:
    GTorus();
    GTorus(float outerRadius, float innerRadius, int nsides, int nrings) ;
    ~GTorus();

public:
    void render() const;

private:
    void generateVerts(float* verts, float* norms, float* tex, unsigned int* el, float outerRadius, float innerRadius);

private:
    GLuint m_vertexArrays[1];
    int faces, rings, sides;
};
//===============================================
#endif
//===============================================
