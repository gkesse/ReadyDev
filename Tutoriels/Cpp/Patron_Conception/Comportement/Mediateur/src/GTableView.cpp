//===============================================
#include "GTableView.h"
#include "GMediator.h"
//===============================================
GTableView::GTableView() {
    m_mediator = 0;
    m_name = "TableView";
}
//===============================================
GTableView::GTableView(GMediator* mediator) {
    m_mediator = mediator;
    m_mediator->setTableView(this);
    m_name = "TableView";
}
//===============================================
GTableView::~GTableView() {

}
//===============================================
void GTableView::execute() {
    m_mediator->executeTableView();
}
//===============================================
