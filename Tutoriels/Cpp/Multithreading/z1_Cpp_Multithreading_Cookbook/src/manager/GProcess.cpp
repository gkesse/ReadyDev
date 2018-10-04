//===============================================
#include "GProcess.h"
#include "GProcessHelloWorld.h"
#include "GProcessFunctionalProgramming.h"
#include "GProcessStructuralProgramming.h"
#include "GProcessObjectOrientedProgramming.h"
#include "GProcessInheritance.h"
#include "GProcessPolymorphism.h"
#include "GConfig.h"
//===============================================
GProcess* GProcess::m_instance = 0;
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lProcess = GConfig::Instance()->getData("PROCESS");
    if(lProcess == "HELLO_WORLD") return GProcessHelloWorld::Instance();
    if(lProcess == "FUNCTIONAL_PROGRAMMING") return GProcessFunctionalProgramming::Instance();
    if(lProcess == "STRUCTURAL_PROGRAMMING") return GProcessStructuralProgramming::Instance();
    if(lProcess == "OBJECT_ORIENTED_PROGRAMMING") return GProcessObjectOrientedProgramming::Instance();
    if(lProcess == "INHERITANCE") return GProcessInheritance::Instance();
    if(lProcess == "POLYMORPHISM") return GProcessPolymorphism::Instance();
    return GProcessHelloWorld::Instance();
}
//===============================================
double GProcess::randData(double dMin, double dMax) {
    double dVal = (double)rand() / RAND_MAX;
    return dMin + dVal * (dMax - dMin);
}
//===============================================
