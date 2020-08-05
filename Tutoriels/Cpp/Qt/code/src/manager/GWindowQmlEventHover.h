//===============================================
#ifndef _GWindowQmlEventHover_
#define _GWindowQmlEventHover_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlEventHover;
}
//===============================================
class GWindowQmlEventHover : public GWindow {
public:
    GWindowQmlEventHover();
    ~GWindowQmlEventHover();

public:
    static GWindowQmlEventHover* Instance();
    void run();

private:
    static GWindowQmlEventHover* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
