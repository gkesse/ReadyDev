//===============================================
#ifndef _GWindowSimple_
#define _GWindowSimple_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowSimple;
}
//===============================================
class GWindowSimple : public QWidget, public GWindow {
    Q_OBJECT

public:
    GWindowSimple(QWidget* parent = 0);
    ~GWindowSimple();

public:
    static GWindowSimple* Instance();
    void run();

private:
    Ui::GWindowSimple* ui;
    static GWindowSimple* m_instance;
};
//===============================================
#endif
//===============================================
