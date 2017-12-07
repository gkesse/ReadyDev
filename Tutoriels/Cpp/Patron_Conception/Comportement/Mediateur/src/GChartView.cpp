//===============================================
#include "GChartView.h"
#include "GMediator.h"
//===============================================
GChartView::GChartView() {
    m_mediator = 0;
    m_name = "ChartView";
}
//===============================================
GChartView::GChartView(GMediator* mediator) {
    m_mediator = mediator;
    m_mediator->setChartView(this);
    m_name = "ChartView";
}
//===============================================
GChartView::~GChartView() {

}
//===============================================
void GChartView::execute() {
    m_mediator->executeChartView();
}
//===============================================
