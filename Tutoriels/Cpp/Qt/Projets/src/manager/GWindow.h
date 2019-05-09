//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include "GInclude.h"
//===============================================
class GWindow : public QWidget {
    Q_OBJECT

public:
    GWindow(QWidget *parent = 0);
    virtual ~GWindow();

public:
    static GWindow* Create(const string& key);
};
//===============================================
#endif
//===============================================
