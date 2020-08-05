//===============================================
#ifndef _GWindowQmlRect_
#define _GWindowQmlRect_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlRect;
}
//===============================================
class GWindowQmlRect : public GWindow {
public:
    GWindowQmlRect();
    ~GWindowQmlRect();

public:
    static GWindowQmlRect* Instance();
    void run();

private:
    static GWindowQmlRect* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
