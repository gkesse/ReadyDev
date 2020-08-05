//===============================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include "GInclude.h"
//===============================================
class GWindow {
public:
    GWindow();
    ~GWindow();

public:
    static GWindow* Instance();
    virtual void run() = 0;

private:
    static GWindow* m_instance;
};
//===============================================
#endif
//===============================================
