//===============================================
#include "GZeroMQ.h"
//===============================================
int main (int argc, char const *argv[]) {
    cout << "Server...\n";
    GZeroMQ::Instance()->setEndPoint("tcp://*:4040");
    GZeroMQ::Instance()->init();
    GZeroMQ::Instance()->bind();
    while(1) {
        GZeroMQ::Instance()->receive();
        GZeroMQ::Instance()->send("World");
    }
    GZeroMQ::Instance()->release();
    return 0;
}
//===============================================
