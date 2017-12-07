//===============================================
#include "GMediator.h"
#include "GChartView.h"
#include "GTableView.h"
//===============================================
GMediator::GMediator() {

}
//===============================================
GMediator::~GMediator() {

}
//===============================================
void GMediator::setChartView(GChartView* chartView) {
    m_chartView = chartView;
}
//===============================================
void GMediator::setTableView(GTableView* tableView) {
    m_tableView = tableView;
}
//===============================================
void GMediator::executeChartView() {
    cout << "Mediator : " << m_chartView->getName();
    cout << " Execute\n";
}
//===============================================
void GMediator::executeTableView() {
    cout << "Mediator : " << m_tableView->getName();
    cout << " Execute\n";
}
//===============================================
