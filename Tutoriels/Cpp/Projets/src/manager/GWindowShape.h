//===============================================
#ifndef _GWindowShape_
#define _GWindowShape_
//===============================================
#include "GWindow.h"
//===============================================
class GWindowShape : public GWindow {
    Q_OBJECT

public:
    GWindowShape(QWidget *parent = 0);
    ~GWindowShape();

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);

public slots:
    void slotShowMaximized();

private:
    QPixmap* m_pixmap;
};
//===============================================
#endif
//===============================================
