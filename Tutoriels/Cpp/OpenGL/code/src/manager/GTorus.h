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
    void generateVerts(float * , float * ,float *, unsigned int *,
                           float , float);
private:
    unsigned int vaoHandle;
    int faces, rings, sides;
};
//===============================================
#endif
//===============================================
