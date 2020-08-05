//===============================================
#ifndef _GPromotedClassUi_
#define _GPromotedClassUi_
//===============================================
#include "GInclude.h"
#include "ui_GPromotedClassUi.h"
//===============================================
class GPromotedClassUi : public QDialog, public Ui::GPromotedClassUi {
    Q_OBJECT

public:
    GPromotedClassUi(QWidget *parent = 0);
};
//===============================================
#endif
//===============================================
