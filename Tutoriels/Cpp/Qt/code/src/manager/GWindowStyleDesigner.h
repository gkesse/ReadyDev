//===============================================
#ifndef _GWindowStyleDesigner_
#define _GWindowStyleDesigner_
//===============================================
#include "GWindow.h"
//===============================================
namespace Ui {
class GWindowStyleDesigner;
}
//===============================================
class GWindowStyleDesigner : public QWidget, public GWindow {
    Q_OBJECT

public:
    GWindowStyleDesigner(QWidget* parent = 0);
    ~GWindowStyleDesigner();

public:
    static GWindowStyleDesigner* Instance();
    void run();

private:
    Ui::GWindowStyleDesigner* ui;
    static GWindowStyleDesigner* m_instance;
};
//===============================================
#endif
//===============================================
