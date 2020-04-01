//===============================================
#ifndef _GWindowQmlEventPressed_
#define _GWindowQmlEventPressed_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlEventPressed;
}
//===============================================
class GWindowQmlEventPressed : public GWindow {
public:
    GWindowQmlEventPressed();
    ~GWindowQmlEventPressed();

public:
    static GWindowQmlEventPressed* Instance();
    void run();

private:
    static GWindowQmlEventPressed* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
