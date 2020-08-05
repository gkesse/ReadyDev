//================================================
#ifndef _GThread_
#define _GThread_
//================================================
#include "GInclude.h"
//================================================
#include <iostream>
//================================================
using namespace std;
//================================================
class GThread {
public:
    GThread();
    ~GThread();

public:
    static GThread* Instance();
    void runThread();
    void showProcessId();
    void loadLibrary();

private:
    static GThread* m_instance;
    LPCWSTR m_appName;
    LPCWSTR m_libName;
    PROCESS_INFORMATION m_processInformation = {0};
};
//================================================
#endif
//================================================
