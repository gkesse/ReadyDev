//===============================================
#ifndef _GWindowToolButton_
#define _GWindowToolButton_
//================================================
#include "GWindow.h"
//===============================================
class GWindowToolButton : public GWindow {
    Q_OBJECT

public:
    GWindowToolButton(QWidget* parent = 0);
    ~GWindowToolButton();

public slots:
    void slotFacebookButtonClicked();
    void slotSkypeButtonClicked();
    void slotGithubButtonClicked();
    void slotLinkedinButtonClicked();
};
//===============================================
#endif
//===============================================
