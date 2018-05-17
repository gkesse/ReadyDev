//===============================================
#ifndef _GWindowQmlEventMouseArea_
#define _GWindowQmlEventMouseArea_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlEventMouseArea;
}
//===============================================
class GWindowQmlEventMouseArea : public GWindow {
public:
    GWindowQmlEventMouseArea();
    ~GWindowQmlEventMouseArea();

public:
    static GWindowQmlEventMouseArea* Instance();
    void run();

private:
    static GWindowQmlEventMouseArea* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
