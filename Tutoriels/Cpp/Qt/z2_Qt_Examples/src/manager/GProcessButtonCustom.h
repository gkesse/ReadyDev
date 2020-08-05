//===============================================
#ifndef _GProcessButtonCustom_
#define _GProcessButtonCustom_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessButtonCustom : public GProcess {
public:
    GProcessButtonCustom();
    ~GProcessButtonCustom();

public:
    static GProcessButtonCustom* Instance();
    void run();

private:
    static GProcessButtonCustom* m_instance;
};
//===============================================
#endif
//===============================================
