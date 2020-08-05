//===============================================
#ifndef _GWindowQmlButtonIcon_
#define _GWindowQmlButtonIcon_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlButtonIcon;
}
//===============================================
class GWindowQmlButtonIcon : public GWindow {
public:
    GWindowQmlButtonIcon();
    ~GWindowQmlButtonIcon();

public:
    static GWindowQmlButtonIcon* Instance();
    void run();

private:
    static GWindowQmlButtonIcon* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
