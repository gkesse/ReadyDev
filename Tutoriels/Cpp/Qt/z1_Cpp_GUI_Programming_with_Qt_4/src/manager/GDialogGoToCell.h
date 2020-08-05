//===============================================
#ifndef _GDialogGoToCell_
#define _GDialogGoToCell_
//===============================================
#include "GInclude.h"
#include "ui_GDialogGoToCell.h"
//===============================================
class GDialogGoToCell : public QDialog, public Ui::GDialogGoToCell {
    Q_OBJECT

public:
    GDialogGoToCell(QWidget *parent = 0);
    ~GDialogGoToCell();

private slots:
    void on_lineEdit_textChanged();
};
//===============================================
#endif
//===============================================
