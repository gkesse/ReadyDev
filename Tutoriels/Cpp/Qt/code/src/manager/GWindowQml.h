//===============================================
#ifndef _GWindowQml_
#define _GWindowQml_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQml;
}
//===============================================
class GWindowQml : public GWindow {
public:
    GWindowQml();
    ~GWindowQml();

public:
    static GWindowQml* Instance();
    void run();

private:
    static GWindowQml* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
