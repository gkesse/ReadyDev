//===============================================
#ifndef _GWindowRadioButton_
#define _GWindowRadioButton_
//================================================
#include "GWindow.h"
//===============================================
class GWindowRadioButton : public GWindow {
    Q_OBJECT

public:
    GWindowRadioButton(QWidget* parent = 0);
    ~GWindowRadioButton();

public slots:
    void slotCreateButtonClicked();
    void slotReadButtonClicked();
    void slotUpdateButtonClicked();
    void slotDeleteButtonClicked();
};
//===============================================
#endif
//===============================================
