//===============================================
#ifndef _GWindowQmlEventDrag_
#define _GWindowQmlEventDrag_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlEventDrag;
}
//===============================================
class GWindowQmlEventDrag : public GWindow {
public:
    GWindowQmlEventDrag();
    ~GWindowQmlEventDrag();

public:
    static GWindowQmlEventDrag* Instance();
    void run();

private:
    static GWindowQmlEventDrag* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
