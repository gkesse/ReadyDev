//===============================================
#ifndef _GObjOgre_
#define _GObjOgre_
//================================================
#include "GInclude.h"
//================================================
#include <QMap>
//===============================================
class GObjOgre {
public:
    GObjOgre();
    GObjOgre(const char* fileName);
    ~GObjOgre();

public:
    void initObject(const char* fileName);
    void loadOBJ(const char* fileName);
    void trimString(string & str );
    void storeVBO(
            const vector<glm::vec3> & points,
            const vector<glm::vec3> & normals,
            const vector<glm::vec2> &texCoords,
            const vector<glm::vec4> &tangents,
            const vector<int> &elements );
    void draw(GLuint program, glm::mat4& projection, glm::mat4& modelView);

private:
    unsigned int faces;
    unsigned int vaoHandle;
};
//===============================================
#endif
//===============================================
