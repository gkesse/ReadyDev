//===============================================
#ifndef _GTableView_
#define _GTableView_
//===============================================
#include "GCommand.h"
//===============================================
class GMediator;
//===============================================
class GTableView : public GCommand {
public:
    GTableView();
    GTableView(GMediator* mediator);
    ~GTableView();

public:
    void execute();

private:
    GMediator* m_mediator;
};
//===============================================
#endif
//===============================================
