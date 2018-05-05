//===============================================
#ifndef _GObjTeapot_
#define _GObjTeapot_
//================================================
#include "GInclude.h"
//===============================================
class GObjTeapot {
public:
    GObjTeapot();
    GObjTeapot(int grid, glm::mat4 lidTransform) ;
    ~GObjTeapot();

public:
    void initObject(int grid, glm::mat4 lidTransform);
    void generatePatches(float * v, float * n, float *tc, unsigned int* el, int grid);
    void buildPatchReflect(
            int patchNum,
            float *B, float *dB,
            float *v, float *n, float *, unsigned int *el,
            int &index, int &elIndex, int &, int grid,
            bool reflectX, bool reflectY);
    void buildPatch(glm::vec3 patch[][4],
    float *B, float *dB,
    float *v, float *n,float *, unsigned int *el,
    int &index, int &elIndex, int &, int grid, glm::mat3 reflect, bool invertNormal);
    void getPatch( int patchNum, glm::vec3 patch[][4], bool reverseV );

    void computeBasisFunctions( float * B, float * dB, int grid );
    glm::vec3 evaluate( int gridU, int gridV, float *B, glm::vec3 patch[][4] );
    glm::vec3 evaluateNormal( int gridU, int gridV, float *B, float *dB, glm::vec3 patch[][4] );
    void moveLid(int,float *,glm::mat4);
    void draw(const GLuint program, const glm::mat4& projection, const glm::mat4& modelView);

private:
    unsigned int vaoHandle;
    unsigned int faces;
};
//===============================================
#endif
//===============================================
