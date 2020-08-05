//===============================================
#ifndef _GWindowQmlPropertyChanged_
#define _GWindowQmlPropertyChanged_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlPropertyChanged;
}
//===============================================
class GWindowQmlPropertyChanged : public GWindow {
public:
    GWindowQmlPropertyChanged();
    ~GWindowQmlPropertyChanged();

public:
    static GWindowQmlPropertyChanged* Instance();
    void run();

private:
    static GWindowQmlPropertyChanged* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
