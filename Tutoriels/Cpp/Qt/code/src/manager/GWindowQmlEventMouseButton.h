//===============================================
#ifndef _GWindowQmlEventMouseButton_
#define _GWindowQmlEventMouseButton_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlEventMouseButton;
}
//===============================================
class GWindowQmlEventMouseButton : public GWindow {
public:
    GWindowQmlEventMouseButton();
    ~GWindowQmlEventMouseButton();

public:
    static GWindowQmlEventMouseButton* Instance();
    void run();

private:
    static GWindowQmlEventMouseButton* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
