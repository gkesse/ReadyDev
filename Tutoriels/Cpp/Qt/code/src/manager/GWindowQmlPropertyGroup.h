//===============================================
#ifndef _GWindowQmlPropertyGroup_
#define _GWindowQmlPropertyGroup_
//===============================================
#include "GWindow.h"
#include <QQmlApplicationEngine>
//===============================================
namespace Ui {
class GWindowQmlPropertyGroup;
}
//===============================================
class GWindowQmlPropertyGroup : public GWindow {
public:
    GWindowQmlPropertyGroup();
    ~GWindowQmlPropertyGroup();

public:
    static GWindowQmlPropertyGroup* Instance();
    void run();

private:
    static GWindowQmlPropertyGroup* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
