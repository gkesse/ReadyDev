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
#include "GProcessInterprocessCommunicationServer.h"
#include "GProcessInterprocessCommunicationClient.h"
#include "GProcessInterprocessCommunicationSemaphoreClient.h"
#include "GProcessInterprocessCommunicationSemaphoreServer.h"
#include "GConfig.h"
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
    if(lProcess == "INTERPROCESS_COMMUNICATION_SERVER") return GProcessInterprocessCommunicationServer::Instance();
    if(lProcess == "INTERPROCESS_COMMUNICATION_CLIENT") return GProcessInterprocessCommunicationClient::Instance();
    if(lProcess == "INTERPROCESS_COMMUNICATION_SEMAPHORE_CLIENT") return GProcessInterprocessCommunicationSemaphoreClient::Instance();
    if(lProcess == "INTERPROCESS_COMMUNICATION_SEMAPHORE_SERVER") return GProcessInterprocessCommunicationSemaphoreServer::Instance();
    return GProcessHelloWorld::Instance();
}
//===============================================
double GProcess::randData(double dMin, double dMax) {
    double dVal = (double)rand() / RAND_MAX;
    return dMin + dVal * (dMax - dMin);
}
//===============================================
void GProcess::run(int argc, char **argv) {}
void GProcess::run2(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, int nCmdShow) {}
//===============================================
