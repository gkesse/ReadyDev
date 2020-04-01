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
    void run();

private:
    static GProcessPushButton* m_instance;
};
//===============================================
#endif
//===============================================
