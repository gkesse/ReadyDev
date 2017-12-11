//===============================================
#ifndef _GHorizontal_
#define _GHorizontal_
//===============================================
#include "GWindow.h"
//===============================================
class GHorizontal : public GWindow {
public:
    GHorizontal();
    GHorizontal(GWindow* window);
    ~GHorizontal();

public:
    string getDescription() const;

private:
    GWindow* m_window;
};
//===============================================
#endif
//===============================================
