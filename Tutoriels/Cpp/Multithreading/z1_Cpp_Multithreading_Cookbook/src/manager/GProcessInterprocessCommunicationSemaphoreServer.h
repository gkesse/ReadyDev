//===============================================
#ifndef _GProcessInterprocessCommunicationSemaphoreServer_
#define _GProcessInterprocessCommunicationSemaphoreServer_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _tagCOMMUNICATIONOBJECT COMMUNICATIONOBJECT, *PCOMMUNICATIONOBJECT;
//===============================================
class GProcessInterprocessCommunicationSemaphoreServer : public GProcess {
public:
    GProcessInterprocessCommunicationSemaphoreServer();
    ~GProcessInterprocessCommunicationSemaphoreServer();

public:
    static GProcessInterprocessCommunicationSemaphoreServer* Instance();
    void run(int argc, char **argv);
    void eat();

private:
    static GProcessInterprocessCommunicationSemaphoreServer* m_instance;
    TCHAR* m_mappingName;
    TCHAR* m_semaphoreName;
    bool m_exitApplication;
};
//===============================================
#endif
//===============================================
