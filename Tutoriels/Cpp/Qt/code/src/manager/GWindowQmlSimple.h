//===============================================
#ifndef _GWindowQmlSimple_
#define _GWindowQmlSimple_
//===============================================
#include "GWindow.h"
#include <QQmlApplicationEngine>
//===============================================
namespace Ui {
class GWindowQmlSimple;
}
//===============================================
class GWindowQmlSimple : public GWindow {
public:
    GWindowQmlSimple();
    ~GWindowQmlSimple();

public:
    static GWindowQmlSimple* Instance();
    void run();

private:
    static GWindowQmlSimple* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
