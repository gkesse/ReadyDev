//===============================================
#ifndef _GWindowQmlImplicit_
#define _GWindowQmlImplicit_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlImplicit;
}
//===============================================
class GWindowQmlImplicit : public GWindow {
public:
    GWindowQmlImplicit();
    ~GWindowQmlImplicit();

public:
    static GWindowQmlImplicit* Instance();
    void run();

private:
    static GWindowQmlImplicit* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
