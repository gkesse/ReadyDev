//===============================================
#ifndef _GProcess_
#define _GProcess_
//================================================
#include "GInclude.h"
//===============================================
class GProcess {
public:
    GProcess();
    ~GProcess();

public:
    static GProcess* Instance();
    double randData(double dMin, double dMax);
    virtual void run(int argc = 0, char** argv = 0);
    virtual void run2(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPTSTR lpCmdLine, int nCmdShow);

private:
    static GProcess* m_instance;
};
//===============================================
#endif
//===============================================