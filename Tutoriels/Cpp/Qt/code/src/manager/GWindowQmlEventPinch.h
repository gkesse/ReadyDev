//===============================================
#ifndef _GWindowQmlEventPinch_
#define _GWindowQmlEventPinch_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlEventPinch;
}
//===============================================
class GWindowQmlEventPinch : public GWindow {
public:
    GWindowQmlEventPinch();
    ~GWindowQmlEventPinch();

public:
    static GWindowQmlEventPinch* Instance();
    void run();

private:
    static GWindowQmlEventPinch* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
