//===============================================
#ifndef _GObjTorus_
#define _GObjTorus_
//================================================
#include "GInclude.h"
//===============================================
class GObjTorus {
public:
    GObjTorus();
    GObjTorus(float outerRadius, float innerRadius, int nSides, int nRings) ;
    ~GObjTorus();

public:
    void draw();

private:
    void generateVertex(float* vertices, float* normals, float* texCoords, GLuint* indices, float outerRadius, float innerRadius);

private:
    GLuint m_vertexArrays[1];
    int m_rings;
    int m_sides;
    int m_faces;
};
//===============================================
#endif
//===============================================
