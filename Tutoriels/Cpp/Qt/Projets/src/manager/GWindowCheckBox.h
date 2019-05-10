//===============================================
#ifndef _GWindowCheckBox_
#define _GWindowCheckBox_
//================================================
#include "GWindow.h"
//===============================================
class GWindowCheckBox : public GWindow {
    Q_OBJECT

public:
    GWindowCheckBox(QWidget* parent = 0);
    ~GWindowCheckBox();

public slots:
    void slotCreateButtonClicked();
    void slotReadButtonClicked();
    void slotUpdateButtonClicked();
    void slotDeleteButtonClicked();
};
//===============================================
#endif
//===============================================
