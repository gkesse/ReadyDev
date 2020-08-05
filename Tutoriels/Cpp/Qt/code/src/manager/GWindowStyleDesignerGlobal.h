//===============================================
#ifndef _GWindowStyleDesignerGlobal_
#define _GWindowStyleDesignerGlobal_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowStyleDesignerGlobal;
}
//===============================================
class GWindowStyleDesignerGlobal : public QWidget, public GWindow {
    Q_OBJECT

public:
    GWindowStyleDesignerGlobal(QWidget* parent = 0);
    ~GWindowStyleDesignerGlobal();

public:
    static GWindowStyleDesignerGlobal* Instance();
    void run();

private:
    Ui::GWindowStyleDesignerGlobal* ui;
    static GWindowStyleDesignerGlobal* m_instance;
};
//===============================================
#endif
//===============================================
