//===============================================
#ifndef _GWindowQmlPropertyBind_
#define _GWindowQmlPropertyBind_
//===============================================
#include "GWindow.h"
#include <QQmlApplicationEngine>
//===============================================
namespace Ui {
class GWindowQmlPropertyBind;
}
//===============================================
class GWindowQmlPropertyBind : public GWindow {
public:
    GWindowQmlPropertyBind();
    ~GWindowQmlPropertyBind();

public:
    static GWindowQmlPropertyBind* Instance();
    void run();

private:
    static GWindowQmlPropertyBind* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
