//===============================================
#include <GProcessSocketClient.h>
#include "GSocket.h"
//===============================================
static GProcessO* m_GProcessSocketClientO = 0;
//===============================================
void GProcessSocketClient_Run(int argc, char** argv);
//===============================================
GProcessO* GProcessSocketClient_New() {
    GProcessO* lParent = GProcess_New();
    GProcessSocketClientO* lChild = (GProcessSocketClientO*)malloc(sizeof(GProcessSocketClientO));

    lChild->m_parent = lParent;

    lParent->m_child = lChild;
    lParent->Delete = GProcessSocketClient_Delete;
    lParent->Run = GProcessSocketClient_Run;
    return lParent;
}
//===============================================
void GProcessSocketClient_Delete(GProcessO* obj) {
    GProcess_Delete(obj);
}
//===============================================
GProcessO* GProcessSocketClient() {
    if(m_GProcessSocketClientO == 0) {
        m_GProcessSocketClientO = GProcessSocketClient_New();
    }
    return m_GProcessSocketClientO;
}
//===============================================
void GProcessSocketClient_Run(int argc, char** argv) {
    GSocket()->Start(2, 0);
    GSocket()->Socket(AF_INET, SOCK_STREAM, 0);
    GSocket()->Address(AF_INET, "127.0.0.1", 5566);
    GSocket()->Connect();
    GSocket()->Recv();
    GSocket()->Close();
    GSocket()->Clean();
}
//===============================================
