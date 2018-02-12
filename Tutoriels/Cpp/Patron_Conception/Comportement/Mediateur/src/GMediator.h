//===============================================
#ifndef _GMediator_
#define _GMediator_
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
class GChartView;
class GTableView;
//===============================================
class GMediator {
public:
    GMediator();
    ~GMediator();

public:
    void setChartView(GChartView* chartView);
    void setTableView(GTableView* tableView);
    void executeChartView();
    void executeTableView();

private:
    GChartView* m_chartView;
    GTableView* m_tableView;
};
//===============================================
#endif
//===============================================
