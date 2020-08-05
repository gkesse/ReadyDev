//===============================================
#include "GProcessStrategy.h"
#include "GStrategy.h"
#include "GConfig.h"
//===============================================
GProcessStrategy* GProcessStrategy::m_instance = 0;
//===============================================
GProcessStrategy::GProcessStrategy() {

}
//===============================================
GProcessStrategy::~GProcessStrategy() {

}
//===============================================
GProcessStrategy* GProcessStrategy::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessStrategy;
    }
    return m_instance;
}
//===============================================
void GProcessStrategy::run(int argc, char **argv) {
    GConfig::Instance()->setData("STRATEGY", "JAVA");
    GStrategy::Instance()->setName("JavaStrategy");
    GStrategy::Instance()->print();
    GConfig::Instance()->setData("STRATEGY", "PYTHON");
    GStrategy::Instance()->setName("PythonStrategy");
    GStrategy::Instance()->print();
}
//===============================================
