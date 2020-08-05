//===============================================
#ifndef _GWindowQmlConsole_
#define _GWindowQmlConsole_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlConsole;
}
//===============================================
class GWindowQmlConsole : public GWindow {
public:
    GWindowQmlConsole();
    ~GWindowQmlConsole();

public:
    static GWindowQmlConsole* Instance();
    void run();

private:
    static GWindowQmlConsole* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
