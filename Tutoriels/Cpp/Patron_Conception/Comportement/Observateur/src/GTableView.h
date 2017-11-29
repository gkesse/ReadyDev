//===============================================
#ifndef _GTableView_
#define _GTableView_
//===============================================
#include "GObserver.h"
//===============================================
class GTableView : public GObserver {
public:
    GTableView();
    ~GTableView();

public:
    void update(const string& data);
};
//===============================================
#endif
//===============================================
