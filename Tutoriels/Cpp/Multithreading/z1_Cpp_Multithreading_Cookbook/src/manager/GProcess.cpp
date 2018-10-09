//===============================================
#include "GProcess.h"
#include "GProcessHelloWorld.h"
#include "GProcessFunctionalProgramming.h"
#include "GProcessStructuralProgramming.h"
#include "GProcessObjectOrientedProgramming.h"
#include "GProcessInheritance.h"
#include "GProcessPolymorphism.h"
#include "GProcessEventMessage.h"
#include "GProcessLinkedList.h"
#include "GProcessProcessModel.h"
#include "GProcessProcessImplementation.h"
#include "GProcessInterprocessCommunication.h"
#include "GProcessInterprocessCommunicationClient.h"
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
    if(lProcess == "EVENT_MESSAGE") return GProcessEventMessage::Instance();
    if(lProcess == "LINKED_LIST") return GProcessLinkedList::Instance();
    if(lProcess == "PROCESS_MODEL") return GProcessProcessModel::Instance();
    if(lProcess == "PROCESS_IMPLEMENTATION") return GProcessProcessImplementation::Instance();
    if(lProcess == "INTERPROCESS_COMMUNICATION") return GProcessInterprocessCommunication::Instance();
    if(lProcess == "INTERPROCESS_COMMUNICATION_CLIENT") return GProcessInterprocessCommunicationClient::Instance();
    return GProcessHelloWorld::Instance();
}
//===============================================
double GProcess::randData(double dMin, double dMax) {
    double dVal = (double)rand() / RAND_MAX;
    return dMin + dVal * (dMax - dMin);
}
//===============================================
void GProcess::run(int argc, char **argv) {}
void GProcess::run2(HINSTANCE hThis, HINSTANCE hPrev, LPSTR szCmdLine, int iCmdShow) {}
//===============================================
