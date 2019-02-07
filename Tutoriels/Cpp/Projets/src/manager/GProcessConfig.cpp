//===============================================
#include "GProcessConfig.h"
#include "GConfig.h"
//===============================================
GProcessConfig* GProcessConfig::m_instance = 0;
//===============================================
GProcessConfig::GProcessConfig() {

}
//===============================================
GProcessConfig::~GProcessConfig() {

}
//===============================================
GProcessConfig* GProcessConfig::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessConfig;
    }
    return m_instance;
}
//===============================================
void GProcessConfig::run(int argc, char **argv) {
    GConfig::Instance()->setData("Nom", "KESSE");
    GConfig::Instance()->setData("Prenom", "Gerard");
    GConfig::Instance()->setData("Email", "gerard.kesse@readydev.com");
    GConfig::Instance()->setData("Diplome", "Ingenieur");
    GConfig::Instance()->setData("Formation", "Informatique Industrielle");
    GConfig::Instance()->setData("Ecole", "Polytech'Montpellier");
    GConfig::Instance()->show();
}
//===============================================
