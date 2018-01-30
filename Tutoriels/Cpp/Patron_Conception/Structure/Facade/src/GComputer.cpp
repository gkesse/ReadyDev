//===============================================
#include "GComputer.h"
//===============================================
GComputer::GComputer() {
    m_cpu = new GCpu;
    m_memory = new GMemory;
    m_hardDrive = new GHardDrive;
}
//===============================================
GComputer::~GComputer() {
    delete m_cpu;
    delete m_memory;
    delete m_hardDrive;
}
//===============================================
void GComputer::start() {
    m_cpu->freeze();
    m_cpu->jump();
    m_cpu->execute();
    m_memory->load();
    m_hardDrive->read();
}
//===============================================
