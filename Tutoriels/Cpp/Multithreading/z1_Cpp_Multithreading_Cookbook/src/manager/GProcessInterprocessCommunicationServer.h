//===============================================
#ifndef _GProcessInterprocessCommunicationServer_
#define _GProcessInterprocessCommunicationServer_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _tagCOMMUNICATIONOBJECT COMMUNICATIONOBJECT, *PCOMMUNICATIONOBJECT;
//===============================================
class GProcessInterprocessCommunicationServer : public GProcess {
public:
    GProcessInterprocessCommunicationServer();
    ~GProcessInterprocessCommunicationServer();

public:
    static GProcessInterprocessCommunicationServer* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessInterprocessCommunicationServer* m_instance;
};
//===============================================
#endif
//===============================================
