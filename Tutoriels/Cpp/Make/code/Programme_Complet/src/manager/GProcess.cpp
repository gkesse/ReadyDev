//===============================================
#include "GProcess.h"
#include "GShow.h"
#include "GMath.h"
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
    if(m_instance == 0) {
        m_instance = new GProcess;
    }
    return m_instance;
}
//===============================================
void GProcess::run() {
    double lData;
    
    GShow::Instance()->show("### Operations arithmetiques\n"); 
    
    lData = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(lData, "add(22, 7)");  
    
    lData = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(lData, "subtract(22, 7)");  
    
    lData = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(lData, "multiply(22, 7)"); 
    
    lData = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(lData, "divide(22, 7)"); 
    
    lData = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(lData, "quotient(22, 7)"); 
    
    lData = GMath::Instance()->modulo(22, 7);
    GShow::Instance()->show(lData, "modulus(22, 7)");    
}
//===============================================
