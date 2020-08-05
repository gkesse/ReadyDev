//===============================================
#ifndef _GDialogNormal_
#define _GDialogNormal_
//===============================================
#include "GDialog.h"
//===============================================
class GDialogNormal : public GDialog {
    Q_OBJECT

public:
    GDialogNormal(QWidget *parent = 0);
    virtual ~GDialogNormal();

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);
};
//===============================================
#endif
//===============================================
