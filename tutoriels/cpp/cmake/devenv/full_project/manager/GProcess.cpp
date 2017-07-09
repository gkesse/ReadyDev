#include "GProcess.h"
#include "GShow.h"
#include "GMath.h"

GProcess* GProcess::m_instance = 0;

GProcess::GProcess() {

}

GProcess::~GProcess() {

}

GProcess* GProcess::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcess;
    }
    
    return m_instance;
}

void GProcess::run() {
    double m_data;
    
    GShow::Instance()->show("Full Project..."); 
    
    m_data = GMath::Instance()->add(22, 7);
    GShow::Instance()->show(m_data, "add(22, 7)");  
    
    m_data = GMath::Instance()->subtract(22, 7);
    GShow::Instance()->show(m_data, "subtract(22, 7)");  
    
    m_data = GMath::Instance()->multiply(22, 7);
    GShow::Instance()->show(m_data, "multiply(22, 7)"); 
    
    m_data = GMath::Instance()->divide(22, 7);
    GShow::Instance()->show(m_data, "divide(22, 7)"); 
    
    m_data = GMath::Instance()->quotient(22, 7);
    GShow::Instance()->show(m_data, "quotient(22, 7)"); 
    
    m_data = GMath::Instance()->modulus(22, 7);
    GShow::Instance()->show(m_data, "modulus(22, 7)");    
}
