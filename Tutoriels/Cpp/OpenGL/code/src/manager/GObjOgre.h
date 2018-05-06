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
            const vector<vec3> & points,
            const vector<vec3> & normals,
            const vector<vec2> &texCoords,
            const vector<vec4> &tangents,
            const vector<int> &elements );
    void draw(glm::mat4& projection, glm::mat4& modelview);

private:
    static const int VERTEX_MAX = 36;
    float m_vertices[VERTEX_MAX*3];
    float m_texCoords[VERTEX_MAX*2];
    GLuint m_program;
    QMap<QString, GLuint> m_textureMap;
};
//===============================================
#endif
//===============================================
