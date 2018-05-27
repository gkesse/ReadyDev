//===============================================
#ifndef _GObjTorus_
#define _GObjTorus_
//================================================
#include "GInclude.h"
//===============================================
class GObjTorus {
public:
    GObjTorus();
    GObjTorus(float outerRadius, float innerRadius, int verticalSides, int horizontalSides) ;
    ~GObjTorus();

public:
    void initObject(float outerRadius, float innerRadius, int verticalSides, int horizontalSides);
    void generateVertex(float* vertices, float* normals, float* texCoords, GLuint* indices, float outerRadius, float innerRadius);
    void draw(const GLuint program, const glm::mat4& projection, const glm::mat4& modelView);

private:
    GLuint m_VAO;
    GLuint m_program;
    int m_horizontalSides;
    int m_verticalSides;
    int m_faces;
};
//===============================================
#endif
//===============================================
