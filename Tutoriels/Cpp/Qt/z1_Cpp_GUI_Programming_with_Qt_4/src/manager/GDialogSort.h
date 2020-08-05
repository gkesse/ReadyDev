//===============================================
#ifndef _GDialogSort_
#define _GDialogSort_
//===============================================
#include "GInclude.h"
#include "ui_GDialogSort.h"
//===============================================
class GDialogSort : public QDialog, public Ui::GDialogSort {
    Q_OBJECT

public:
    GDialogSort(QWidget *parent = 0);
    ~GDialogSort();

public:
    void setColumnRange(QChar first, QChar last);
};
//===============================================
#endif
//===============================================
