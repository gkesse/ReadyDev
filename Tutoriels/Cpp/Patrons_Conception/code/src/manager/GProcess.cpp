//===============================================
#include "GProcess.h"
#include "GProcessClass.h"
#include "GProcessInheritance.h"
#include "GProcessPolymorphism.h"
#include "GProcessSingleton.h"
#include "GProcessStrategy.h"
#include "GConfig.h"
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lKey = GConfig::Instance()->getData("PROCESS");
    if(lKey == "CLASS") return GProcessClass::Instance();
    if(lKey == "INHERITANCE") return GProcessInheritance::Instance();
    if(lKey == "POLYMORPHISM") return GProcessPolymorphism::Instance();
    if(lKey == "SINGLETON") return GProcessSingleton::Instance();
    if(lKey == "STRATEGY") return GProcessStrategy::Instance();
    return GProcessClass::Instance();
}
//===============================================
