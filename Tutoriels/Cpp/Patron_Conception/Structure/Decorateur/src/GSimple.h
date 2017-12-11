//===============================================
#ifndef _GSimple_
#define _GSimple_
//===============================================
#include "GWindow.h"
//===============================================
class GSimple : public GWindow {
public:
    GSimple();
    ~GSimple();

public:
    string getDescription() const;
};
//===============================================
#endif
//===============================================
