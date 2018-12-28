//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include "GInclude.h"
//================================================
class GWindow {
public:
    GWindow();
    ~GWindow();
	
public:
    static GWindow* Instance();
    void show();
	
private:
    static GWindow* m_instance;
};
//================================================
#endif
//================================================
