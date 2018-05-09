//===============================================
#include "GObjPig.h"
#include "GShader.h"
#include "GTexture.h"
#include "GVertex.h"
//===============================================
#include <sstream>
#include <QFile>
#include <QTextStream>
//===============================================
GObjPig::GObjPig() {

}
//===============================================
GObjPig::GObjPig(const char* fileName, bool reCenterMesh) {
    initObject(fileName, reCenterMesh);
}
//===============================================
GObjPig::~GObjPig() {

}
//===============================================
void GObjPig::initObject(const char * fileName, bool reCenterMesh) {
    loadOBJ(fileName, reCenterMesh);
}
//===============================================
void GObjPig::loadOBJ(const char* fileName, bool reCenterMesh) {


    vector <glm::vec3> points;
    vector <glm::vec3> normals;
    vector <glm::vec2> texCoords;
    vector <int> faces;

    int nFaces = 0;

    string line, token;
    vector<int> face;

    QFile  lFile( fileName);
    lFile.open(QIODevice::ReadOnly);

    QTextStream objStream(&lFile);

    line = objStream.readLine().toStdString();

    while( !objStream.atEnd()) {
        trimString(line);
        if( line.length( ) > 0 && line.at(0) != '#' ) {
            istringstream lineStream( line );

            lineStream >> token;

            if (token == "v" ) {
                float x, y, z;
                lineStream >> x >> y >> z;
                points.push_back( glm::vec3(x,y,z) );
            } else if (token == "vt" ) {
                // Process texture coordinate
                float s,t;
                lineStream >> s >> t;
                texCoords.push_back( glm::vec2(s,t) );
            } else if (token == "vn" ) {
                float x, y, z;
                lineStream >> x >> y >> z;
                normals.push_back( glm::vec3(x,y,z) );
            } else if (token == "f" ) {
                nFaces++;

                // Process face
                face.clear();
                size_t slash1, slash2;
                //int point, texCoord, normal;
                while( lineStream.good() ) {
                    string vertString;
                    lineStream >> vertString;
                    int pIndex = -1, nIndex = -1 , tcIndex = -1;

                    slash1 = vertString.find("/");
                    if( slash1 == string::npos ){
                        pIndex = atoi( vertString.c_str() ) - 1;
                    } else {
                        slash2 = vertString.find("/", slash1 + 1 );
                        pIndex = atoi( vertString.substr(0,slash1).c_str() )
                                        - 1;
                        if( slash2 > slash1 + 1 ) {
                                tcIndex =
                                        atoi( vertString.substr(slash1 + 1, slash2).c_str() )
                                        - 1;
                        }
                        nIndex =
                                atoi( vertString.substr(slash2 + 1,vertString.length()).c_str() )
                                - 1;
                    }
                    if( pIndex == -1 ) {
                        printf("Missing point index!!!");
                    } else {
                        face.push_back(pIndex);
                    }

                    if( tcIndex != -1 && pIndex != nIndex ) {
                        printf("Texture and point indices are not consistent.\n");
                    }
                    if ( nIndex != -1 && nIndex != pIndex ) {
                        printf("Normal and point indices are not consistent.\n");
                    }
                }
                if( face.size() != 3 ) {
                    printf("Found non-triangular face.\n");
                } else {
                    faces.push_back(face[0]);
                    faces.push_back(face[1]);
                    faces.push_back(face[2]);
                }
            }
        }
        line = objStream.readLine().toStdString();
    }

    lFile.close();

    if( normals.size() == 0 ) {
        generateAveragedNormals(points,normals,faces);
    }

    vector<vec4> tangents;
    if( texCoords.size() > 0 ) {
        generateTangents(points,normals,faces,texCoords,tangents);
    }

    if( reCenterMesh ) {
        center(points);
    }

    storeVBO(points, normals, texCoords, tangents, faces);

    cout << "Loaded mesh from: " << fileName << endl;
    cout << " " << points.size() << " points" << endl;
    cout << " " << nFaces << " faces" << endl;
    cout << " " << normals.size() << " normals" << endl;
    cout << " " << texCoords.size() << " texture coordinates." << endl;
}
//===============================================
void GObjPig::draw(GLuint program, glm::mat4& projection, glm::mat4& modelView) {
    glBindVertexArray(vaoHandle);
    GShader::Instance()->setUniform(program, "ModelViewMatrix", modelView);
    GShader::Instance()->setUniform(program, "ProjectionMatrix", projection);
    glDrawElements(GL_TRIANGLES, 3 * faces, GL_UNSIGNED_INT, BUFFER_OFFSET(0));
}
//===============================================
