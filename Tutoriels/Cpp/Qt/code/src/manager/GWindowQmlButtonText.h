//===============================================
#ifndef _GWindowQmlButtonText_
#define _GWindowQmlButtonText_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowQmlButtonText;
}
//===============================================
class GWindowQmlButtonText : public GWindow {
public:
    GWindowQmlButtonText();
    ~GWindowQmlButtonText();

public:
    static GWindowQmlButtonText* Instance();
    void run();

private:
    static GWindowQmlButtonText* m_instance;
    QQmlApplicationEngine m_engine;
};
//===============================================
#endif
//===============================================
