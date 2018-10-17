//===============================================
#include "GProcessHelloWorld.h"
//===============================================
GProcessHelloWorld* GProcessHelloWorld::m_instance = 0;
//===============================================
GProcessHelloWorld::GProcessHelloWorld() {

}
//===============================================
GProcessHelloWorld::~GProcessHelloWorld() {

}
//===============================================
GProcessHelloWorld* GProcessHelloWorld::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessHelloWorld;
    }
    return m_instance;
}
//===============================================
void GProcessHelloWorld::run(int argc, char **argv) {
    cout << "Bonjour tout le monde\n";
}
//===============================================
