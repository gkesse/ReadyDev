//===============================================
#ifndef _GProcessConnection_
#define _GProcessConnection_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessConnection : public GProcess {
public:
    GProcessConnection();
    ~GProcessConnection();

public:
    static GProcessConnection* Instance();
    void run();

private:
    static GProcessConnection* m_instance;
};
//===============================================
#endif
//===============================================
