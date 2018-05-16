//===============================================
#ifndef _GWindowQmlMouseArea_
#define _GWindowQmlMouseArea_
//===============================================
#include "GWindow.h"
#include <QQmlApplicationEngine>
//===============================================
namespace Ui {
class GWindowQmlMouseArea;
}
//===============================================
class GWindowQmlMouseArea : public GWindow {
public:
    GWindowQmlMouseArea();
    ~GWindowQmlMouseArea();

public:
    static GWindowQmlMouseArea* Instance();
    void run();

private:
    static GWindowQmlMouseArea* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
