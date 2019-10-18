//===============================================
#ifndef _GWindowQmlObj_
#define _GWindowQmlObj_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlObj;
}
//===============================================
class GWindowQmlObj : public GWindow {
public:
    GWindowQmlObj();
    ~GWindowQmlObj();

public:
    static GWindowQmlObj* Instance();
    void run();

private:
    static GWindowQmlObj* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
