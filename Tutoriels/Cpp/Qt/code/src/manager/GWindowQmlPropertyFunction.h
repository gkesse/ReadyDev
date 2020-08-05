//===============================================
#ifndef _GWindowQmlPropertyFunction_
#define _GWindowQmlPropertyFunction_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlPropertyFunction;
}
//===============================================
class GWindowQmlPropertyFunction : public GWindow {
public:
    GWindowQmlPropertyFunction();
    ~GWindowQmlPropertyFunction();

public:
    static GWindowQmlPropertyFunction* Instance();
    void run();

private:
    static GWindowQmlPropertyFunction* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
