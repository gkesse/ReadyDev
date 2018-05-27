//===============================================
#ifndef _GObjPig_
#define _GObjPig_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//===============================================
class GObjPig {
public:
    GObjPig();
    GObjPig(const char * fileName, bool reCenterMesh = false);
    ~GObjPig();

public:
    void initObject(const char* fileName, bool reCenterMesh);
    void loadOBJ(const char * fileName, bool reCenterMesh = false);
    void trimString(string & str );
    void storeVBO(
            const vector<glm::vec3> & points,
            const vector<glm::vec3> & normals,
            const vector<glm::vec2> &texCoords,
            const vector<glm::vec4> &tangents,
            const vector<int> &elements );
    void generateAveragedNormals(
            const vector<glm::vec3> & points,
            vector<glm::vec3> & normals,
            const vector<int> & faces );
    void generateTangents(
            const vector<glm::vec3> & points,
            const vector<glm::vec3> & normals,
            const vector<int> & faces,
            const vector<glm::vec2> & texCoords,
            vector<glm::vec4> & tangents);
    void center(vector<glm::vec3> &);
    void draw(GLuint program, glm::mat4& projection, glm::mat4& modelView);

private:
    unsigned int faces;
    unsigned int vaoHandle;
};
//===============================================
#endif
//===============================================
