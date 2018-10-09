//===============================================
#ifndef _GProcessInterprocessCommunication_
#define _GProcessInterprocessCommunication_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct _tagCOMMUNICATIONOBJECT COMMUNICATIONOBJECT, *PCOMMUNICATIONOBJECT;
//===============================================
class GProcessInterprocessCommunication : public GProcess {
public:
    GProcessInterprocessCommunication();
    ~GProcessInterprocessCommunication();

public:
    static GProcessInterprocessCommunication* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessInterprocessCommunication* m_instance;
};
//===============================================
#endif
//===============================================
