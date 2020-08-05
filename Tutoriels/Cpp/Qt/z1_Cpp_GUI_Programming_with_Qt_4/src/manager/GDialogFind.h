//===============================================
#ifndef _GDialogFind_
#define _GDialogFind_
//================================================
#include "GInclude.h"
//===============================================
class GDialogFind : public QDialog {
    Q_OBJECT

public:
    GDialogFind(QWidget* parent = 0);
    ~GDialogFind();

public:

private:
    QLabel* m_label;
    QLineEdit* m_lineEdit;
    QCheckBox* m_caseCheckBox;
    QCheckBox* m_backwardCheckBox;
    QPushButton* m_findButton;
    QPushButton* m_closeButton;
};
//===============================================
#endif
//===============================================
