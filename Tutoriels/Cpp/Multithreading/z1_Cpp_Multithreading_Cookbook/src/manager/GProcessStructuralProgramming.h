//===============================================
#ifndef _GProcessStructuralProgramming_
#define _GProcessStructuralProgramming_
//===============================================
#include "GProcess.h"
//===============================================
struct GComplex {
    double dReal;
    double dImg;
};
//===============================================
class GProcessStructuralProgramming : public GProcess {
public:
    GProcessStructuralProgramming();
    ~GProcessStructuralProgramming();

public:
    static GProcessStructuralProgramming* Instance();
    GComplex complexAdd(const GComplex& c1, const GComplex& c2);
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessStructuralProgramming* m_instance;
};
//===============================================
#endif
//===============================================
