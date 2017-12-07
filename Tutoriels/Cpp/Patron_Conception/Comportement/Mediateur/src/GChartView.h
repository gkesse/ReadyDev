//===============================================
#ifndef _GChartView_
#define _GChartView_
//===============================================
#include "GCommand.h"
//===============================================
class GMediator;
//===============================================
class GChartView : public GCommand {
public:
    GChartView();
    GChartView(GMediator* mediator);
    ~GChartView();

public:
    void execute();

private:
    GMediator* m_mediator;
};
//===============================================
#endif
//===============================================
