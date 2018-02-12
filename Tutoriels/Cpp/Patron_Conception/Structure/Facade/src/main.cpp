//===============================================
#include "GComputer.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GComputer> m_computer(new GComputer);
    m_computer->start();
}
//===============================================
