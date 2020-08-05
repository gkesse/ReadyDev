//===============================================
#ifndef _GDialogShape_
#define _GDialogShape_
//===============================================
#include "GDialog.h"
//===============================================
class GDialogShape : public GDialog {
    Q_OBJECT

public:
    GDialogShape(QWidget *parent = 0);
    virtual ~GDialogShape();

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);

private:
    QPixmap* m_pixmap;
};
//===============================================
#endif
//===============================================
