//===============================================
#ifndef _GChartView_
#define _GChartView_
//===============================================
#include "GObserver.h"
//===============================================
class GChartView : public GObserver {
public:
    GChartView();
    ~GChartView();

public:
    void update(const string& data);
};
//===============================================
#endif
//===============================================
