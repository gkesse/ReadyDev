//===============================================
#ifndef _GWindowPushButton_
#define _GWindowPushButton_
//================================================
#include "GWindow.h"
//===============================================
class GWindowPushButton : public GWindow {
    Q_OBJECT

public:
    GWindowPushButton(QWidget* parent = 0);
    ~GWindowPushButton();

public slots:
    void slotCreateButtonClicked();
    void slotReadButtonClicked();
    void slotUpdateButtonClicked();
    void slotDeleteButtonClicked();
};
//===============================================
#endif
//===============================================
