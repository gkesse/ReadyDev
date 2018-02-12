//===============================================
#include "GMediator.h"
#include "GChartView.h"
#include "GTableView.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GMediator> m_mediator(new GMediator);
    shared_ptr<GChartView> m_chartView(new GChartView(m_mediator.get()));
    shared_ptr<GTableView> m_tableView(new GTableView(m_mediator.get()));
    m_chartView->execute();
    m_tableView->execute();
}
//===============================================
