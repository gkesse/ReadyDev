//===============================================
#ifndef _GProcessScrollBar_
#define _GProcessScrollBar_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessScrollBar : public GProcess {
public:
    GProcessScrollBar();
    ~GProcessScrollBar();

public:
    static GProcessScrollBar* Instance();
    void run(int argc, char **argv);

private:
    static GProcessScrollBar* m_instance;
};
//===============================================
#endif
//===============================================
