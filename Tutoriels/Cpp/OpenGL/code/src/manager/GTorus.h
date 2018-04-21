//===============================================
#ifndef _GTorus_
#define _GTorus_
//================================================
#include "GInclude.h"
//===============================================
class GTorus {
public:
    GTorus();
    GTorus(float outerRadius, float innerRadius, int nSides, int nRings) ;
    ~GTorus();

public:
    void render() const;

private:
    void generateVertex(float* vertices, float* normals, float* texCoords, unsigned int* indices, float outerRadius, float innerRadius);

private:
    GLuint m_vertexArrays[1];
    int m_rings;
    int m_sides;
    int m_faces;
};
//===============================================
#endif
//===============================================
