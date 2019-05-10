//===============================================
#ifndef _GProcessPushButton_
#define _GProcessPushButton_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPushButton : public GProcess {
public:
    GProcessPushButton();
    ~GProcessPushButton();

public:
    static GProcessPushButton* Instance();
    void run(int argc, char **argv);

private:
    static GProcessPushButton* m_instance;
};
//===============================================
#endif
//===============================================
