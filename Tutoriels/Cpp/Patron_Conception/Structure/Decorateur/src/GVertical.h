//===============================================
#ifndef _GVertical_
#define _GVertical_
//===============================================
#include "GWindow.h"
//===============================================
class GVertical : public GWindow {
public:
    GVertical();
    GVertical(GWindow* window);
    ~GVertical();

public:
    string getDescription() const;

private:
    GWindow* m_window;
};
//===============================================
#endif
//===============================================
