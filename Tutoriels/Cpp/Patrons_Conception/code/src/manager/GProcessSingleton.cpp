//===============================================
#include "GProcessSingleton.h"
#include "GSingleton.h"
//===============================================
GProcessSingleton* GProcessSingleton::m_instance = 0;
//===============================================
GProcessSingleton::GProcessSingleton() {

}
//===============================================
GProcessSingleton::~GProcessSingleton() {

}
//===============================================
GProcessSingleton* GProcessSingleton::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSingleton;
    }
    return m_instance;
}
//===============================================
void GProcessSingleton::run(int argc, char **argv) {
    GSingleton::Instance()->setData("JAVA");
    GSingleton::Instance()->print();
    GSingleton::Instance()->setData("PYTHON");
    GSingleton::Instance()->print();
}
//===============================================
