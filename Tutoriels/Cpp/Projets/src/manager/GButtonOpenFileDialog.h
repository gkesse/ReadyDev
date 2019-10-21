//===============================================
#ifndef _GButtonOpenFileDialog_
#define _GButtonOpenFileDialog_
//===============================================
#include "GButton.h"
//===============================================
namespace Ui {
class GButtonOpenFileDialog;
}
//===============================================
class GButtonOpenFileDialog : public GButton {
    Q_OBJECT

public:
    GButtonOpenFileDialog(QWidget *parent = 0);
    ~GButtonOpenFileDialog();

private:
    Ui::GButtonOpenFileDialog *ui;
};
//===============================================
#endif
//===============================================
