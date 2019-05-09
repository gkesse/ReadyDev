//===============================================
#ifndef _GWindowListView_
#define _GWindowListView_
//================================================
#include "GWindow.h"
//===============================================
class GWindowListView : public GWindow {
    Q_OBJECT

public:
    GWindowListView(QWidget* parent = 0);
    ~GWindowListView();
};
//===============================================
#endif
//===============================================
