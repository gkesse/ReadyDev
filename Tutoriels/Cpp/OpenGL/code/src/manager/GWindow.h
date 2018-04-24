//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include "GInclude.h"
//===============================================
class GWindow {
public:
    GWindow();
    ~GWindow();

public:
    static GWindow* Instance();
    void showVersion();
    virtual void setBackground();
    virtual void show(int* argc, char** argv) = 0;

private:
    static GWindow* m_instance;
};
//===============================================
#endif
//===============================================
