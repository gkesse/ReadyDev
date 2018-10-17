//===============================================
#ifndef _GProcessFunctionalProgramming_
#define _GProcessFunctionalProgramming_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessFunctionalProgramming : public GProcess {
public:
    GProcessFunctionalProgramming();
    ~GProcessFunctionalProgramming();

public:
    static GProcessFunctionalProgramming* Instance();
    void run(int argc = 0, char** argv = 0);
    void complexAdd(double dReal1, double dImg1, double dReal2, double dImg2, double& dReal, double& dImg);

private:
    static GProcessFunctionalProgramming* m_instance;
};
//===============================================
#endif
//===============================================
