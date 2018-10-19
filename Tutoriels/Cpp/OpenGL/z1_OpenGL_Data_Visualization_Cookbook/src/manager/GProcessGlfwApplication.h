//===============================================
#ifndef _GProcessGlfwApplication_
#define _GProcessGlfwApplication_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessGlfwApplication : public GProcess {
public:
    GProcessGlfwApplication();
    ~GProcessGlfwApplication();

public:
    static GProcessGlfwApplication* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessGlfwApplication* m_instance;
};
//===============================================
#endif
//===============================================
