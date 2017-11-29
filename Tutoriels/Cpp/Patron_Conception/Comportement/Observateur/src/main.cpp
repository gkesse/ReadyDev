//===============================================
#include "GTableView.h"
#include "GChartView.h"
#include "GData.h"
//===============================================
int main(int argc, char** argv) {
    GTableView* m_tableView = new GTableView;
    GChartView* m_chartView = new GChartView;
    GData* m_data = new GData;
    m_data->addObserver(m_tableView);
    m_data->addObserver(m_chartView);

    m_data->setData("January ===> 100");
    m_data->setData("February ===> 200");
    return 0;
}
//===============================================
