//===============================================
#include "GTableView.h"
#include "GChartView.h"
#include "GData.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GTableView> m_tableView(new GTableView);
    shared_ptr<GChartView> m_chartView(new GChartView);
    shared_ptr<GData> m_data(new GData);
    m_data->addObserver(m_tableView.get());
    m_data->addObserver(m_chartView.get());

    m_data->setData("January ===> 100");
    m_data->setData("February ===> 200");
    return 0;
}
//===============================================
