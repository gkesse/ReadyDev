//===============================================
#ifndef _GProcessDialog_
#define _GProcessDialog_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessDialog : public GProcess {
public:
    GProcessDialog();
    ~GProcessDialog();

public:
    static GProcessDialog* Instance();
    void run();

private:
    static GProcessDialog* m_instance;
};
//===============================================
#endif
//===============================================
