//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GWindow;
}
//===============================================
class GWindow : public QWidget {
    Q_OBJECT

public:
    GWindow(QWidget *parent = 0);
    ~GWindow();

private:
    Ui::GWindow *ui;
};
//===============================================
#endif
//===============================================
