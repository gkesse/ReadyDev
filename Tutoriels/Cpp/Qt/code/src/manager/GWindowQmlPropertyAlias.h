//===============================================
#ifndef _GWindowQmlPropertyAlias_
#define _GWindowQmlPropertyAlias_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlPropertyAlias;
}
//===============================================
class GWindowQmlPropertyAlias : public GWindow {
public:
    GWindowQmlPropertyAlias();
    ~GWindowQmlPropertyAlias();

public:
    static GWindowQmlPropertyAlias* Instance();
    void run();

private:
    static GWindowQmlPropertyAlias* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
