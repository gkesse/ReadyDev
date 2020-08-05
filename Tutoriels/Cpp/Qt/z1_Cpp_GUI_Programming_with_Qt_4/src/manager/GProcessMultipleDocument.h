//===============================================
#ifndef _GProcessMultipleDocument_
#define _GProcessMultipleDocument_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessMultipleDocument : public GProcess {
public:
    GProcessMultipleDocument();
    ~GProcessMultipleDocument();

public:
    static GProcessMultipleDocument* Instance();
    void run();

private:
    static GProcessMultipleDocument* m_instance;
};
//===============================================
#endif
//===============================================
