//===============================================
#ifndef _GProcessListView_
#define _GProcessListView_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessListView : public GProcess {
public:
    GProcessListView();
    ~GProcessListView();

public:
    static GProcessListView* Instance();
    void run(int argc, char **argv);

private:
    static GProcessListView* m_instance;
};
//===============================================
#endif
//===============================================
