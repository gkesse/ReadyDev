//===============================================
#include "GZeroMQ.h"
//===============================================
int main (int argc, char const *argv[]) {
    cout << "Client...\n";
    GZeroMQ::Instance()->setEndPoint("tcp://localhost:4040");
    GZeroMQ::Instance()->init();
    GZeroMQ::Instance()->connect();
    GZeroMQ::Instance()->receive();
    GZeroMQ::Instance()->release();
    return 0;
}
//===============================================
