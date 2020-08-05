//===============================================
#ifndef _GProcessSplitter_
#define _GProcessSplitter_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSplitter : public GProcess {
public:
    GProcessSplitter();
    ~GProcessSplitter();

public:
    static GProcessSplitter* Instance();
    void run();

private:
    static GProcessSplitter* m_instance;
};
//===============================================
#endif
//===============================================
