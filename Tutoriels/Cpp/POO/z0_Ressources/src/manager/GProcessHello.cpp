//===============================================
#include "GProcessHello.h"
#include "GPrint.h"
//===============================================
GProcessHello* GProcessHello::m_instance = 0;
//===============================================
GProcessHello::GProcessHello() {

}
//===============================================
GProcessHello::~GProcessHello() {

}
//===============================================
GProcessHello* GProcessHello::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessHello;
    }
    return m_instance;
}
//===============================================
void GProcessHello::run(int argc, char **argv) {
    GPrint::Instance()->print("Bonjour tout le monde");
}
//===============================================
