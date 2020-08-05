//===============================================
#ifndef _GProcessIconEditor_
#define _GProcessIconEditor_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessIconEditor : public GProcess {
public:
    GProcessIconEditor();
    ~GProcessIconEditor();

public:
    static GProcessIconEditor* Instance();
    void run();

private:
    static GProcessIconEditor* m_instance;
};
//===============================================
#endif
//===============================================
