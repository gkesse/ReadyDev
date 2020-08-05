//===============================================
#ifndef _GWindowTabWidget_
#define _GWindowTabWidget_
//================================================
#include "GWindow.h"
//===============================================
class GWindowTabWidget : public GWindow {
    Q_OBJECT

public:
    GWindowTabWidget(QWidget* parent = 0);
    ~GWindowTabWidget();

public slots:
    void slotCurrentChanged(const int& index);
};
//===============================================
#endif
//===============================================
