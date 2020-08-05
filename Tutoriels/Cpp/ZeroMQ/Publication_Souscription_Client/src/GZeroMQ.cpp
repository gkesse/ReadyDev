//===============================================
#include "GZeroMQ.h"
//===============================================
GZeroMQ* GZeroMQ::m_instance = 0;
//===============================================
GZeroMQ::GZeroMQ() {
    m_context = 0;
    m_socket = 0;
    m_endPoint = "";
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
void GZeroMQ::setEndPoint(const string& endPoint) {
    m_endPoint = endPoint;
}
//===============================================
void GZeroMQ::init() {
    m_context = zmq_ctx_new();
    m_socket = zmq_socket(m_context, ZMQ_SUB);
    zmq_setsockopt(m_socket, ZMQ_SUBSCRIBE, 0, 0);
}
//===============================================
void GZeroMQ::connect() {
    zmq_connect(m_socket, m_endPoint.c_str());
}
//===============================================
void GZeroMQ::receive() {
    zmq_msg_t m_message;
    zmq_msg_init(&m_message);
    int m_bytes = zmq_msg_recv(&m_message, m_socket, 0);
    string m_msg(m_bytes, 0);
    memcpy(&m_msg, zmq_msg_data(&m_message), m_bytes);
    cout << "Recv : " << m_msg << " | " << m_bytes << "\n";
    zmq_msg_close(&m_message);
}
//===============================================
void GZeroMQ::release() {
    if(m_socket != 0) {zmq_close(m_socket); m_socket = 0;}
    if(m_context != 0) {zmq_ctx_destroy(m_context); m_context = 0;}
}
//===============================================
