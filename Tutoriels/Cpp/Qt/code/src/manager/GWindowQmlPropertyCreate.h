//===============================================
#ifndef _GWindowQmlPropertyCreate_
#define _GWindowQmlPropertyCreate_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlPropertyCreate;
}
//===============================================
class GWindowQmlPropertyCreate : public GWindow {
public:
    GWindowQmlPropertyCreate();
    ~GWindowQmlPropertyCreate();

public:
    static GWindowQmlPropertyCreate* Instance();
    void run();

private:
    static GWindowQmlPropertyCreate* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
