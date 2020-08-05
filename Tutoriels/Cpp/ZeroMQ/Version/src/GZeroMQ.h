//===============================================
#ifndef _GZeroMQ_
#define _GZeroMQ_
//===============================================
#include <zmq.h>
//===============================================
#include <iostream>
#include <string>
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
    void getVersion();
    void showVersion();

private:
    static GZeroMQ* m_instance;
    string m_version;
};
//===============================================
#endif
//===============================================
