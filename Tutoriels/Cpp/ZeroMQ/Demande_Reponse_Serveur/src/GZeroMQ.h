//===============================================
#ifndef _GZeroMQ_
#define _GZeroMQ_
//===============================================
#include <zmq.h>
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
class GZeroMQ {
private:
    GZeroMQ();

public:
    ~GZeroMQ();
    static GZeroMQ* Instance();

public:
    void setEndPoint(const string& endPoint);
    void init();
    void bind();
    void send(const string& data);
    void receive();
    void release();

private:
    static GZeroMQ* m_instance;
    void* m_context;
    void* m_socket;
    string m_endPoint;
};
//===============================================
#endif
//===============================================
