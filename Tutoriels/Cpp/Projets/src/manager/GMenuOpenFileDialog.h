//===============================================
#ifndef _GMenuOpenFileDialog_
#define _GMenuOpenFileDialog_
//===============================================
#include "GMenu.h"
//===============================================
namespace Ui {
class GMenuOpenFileDialog;
}
//===============================================
class GMenuOpenFileDialog : public GMenu {
    Q_OBJECT

public:
    GMenuOpenFileDialog(QWidget *parent = 0);
    ~GMenuOpenFileDialog();

private:
    Ui::GMenuOpenFileDialog *ui;
};
//===============================================
#endif
//===============================================
