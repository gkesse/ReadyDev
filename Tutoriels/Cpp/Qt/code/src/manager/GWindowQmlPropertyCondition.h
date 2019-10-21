//===============================================
#ifndef _GWindowQmlPropertyCondition_
#define _GWindowQmlPropertyCondition_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlPropertyCondition;
}
//===============================================
class GWindowQmlPropertyCondition : public GWindow {
public:
    GWindowQmlPropertyCondition();
    ~GWindowQmlPropertyCondition();

public:
    static GWindowQmlPropertyCondition* Instance();
    void run();

private:
    static GWindowQmlPropertyCondition* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
