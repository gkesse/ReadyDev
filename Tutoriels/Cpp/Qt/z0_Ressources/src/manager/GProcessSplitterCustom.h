//===============================================
#ifndef _GProcessSplitterCustom_
#define _GProcessSplitterCustom_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSplitterCustom : public GProcess {
public:
    GProcessSplitterCustom();
    ~GProcessSplitterCustom();

public:
    static GProcessSplitterCustom* Instance();
    void run();

private:
    static GProcessSplitterCustom* m_instance;
};
//===============================================
#endif
//===============================================
