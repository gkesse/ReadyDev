//===============================================
#ifndef _GDialogGoToCell_
#define _GDialogGoToCell_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GDialogGoToCell;
}
//===============================================
class GDialogGoToCell : public QDialog {
    Q_OBJECT

public:
    GDialogGoToCell(QWidget *parent = 0);
    ~GDialogGoToCell();

private:
    Ui::GDialogGoToCell *ui;
};
//===============================================
#endif
//===============================================
