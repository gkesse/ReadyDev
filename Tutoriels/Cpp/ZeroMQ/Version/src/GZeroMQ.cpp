//===============================================
#include "GZeroMQ.h"
//===============================================
GZeroMQ* GZeroMQ::m_instance = 0;
//===============================================
GZeroMQ::GZeroMQ() {
    m_version = "";
}
//===============================================
GZeroMQ::~GZeroMQ() {

}
//===============================================
GZeroMQ* GZeroMQ::Instance() {
    if(m_instance == 0) {
        m_instance = new GZeroMQ;
    }
    return m_instance;
}
//===============================================
void GZeroMQ::getVersion() {
    int m_major, m_minor, m_patch;
    zmq_version(&m_major, &m_minor, &m_patch);
    m_version += to_string(m_major) + ".";
    m_version += to_string(m_minor) + ".";
    m_version += to_string(m_patch);
}
//===============================================
void GZeroMQ::showVersion() {
    cout << "Version : " << m_version << "\n";
}
//===============================================
