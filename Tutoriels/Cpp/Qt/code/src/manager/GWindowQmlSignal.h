//===============================================
#ifndef _GWindowQmlSignal_
#define _GWindowQmlSignal_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlSignal;
}
//===============================================
class GWindowQmlSignal : public GWindow {
public:
    GWindowQmlSignal();
    ~GWindowQmlSignal();

public:
    static GWindowQmlSignal* Instance();
    void run();

private:
    static GWindowQmlSignal* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
