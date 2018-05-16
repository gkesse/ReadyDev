//===============================================
#ifndef _GWindowQmlTitle_
#define _GWindowQmlTitle_
//===============================================
#include "GWindow.h"
#include <QQmlApplicationEngine>
//===============================================
namespace Ui {
class GWindowQmlTitle;
}
//===============================================
class GWindowQmlTitle : public GWindow {
public:
    GWindowQmlTitle();
    ~GWindowQmlTitle();

public:
    static GWindowQmlTitle* Instance();
    void run();

private:
    static GWindowQmlTitle* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
