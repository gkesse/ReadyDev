//===============================================
#ifndef _GReadyVision_
#define _GReadyVision_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GReadyVision;
}
//===============================================
class GReadyVision : public QWidget {
    Q_OBJECT

public:
    GReadyVision(QWidget *parent = 0);
    ~GReadyVision();

private:
    void createPixmap();
    void createBackground();
    void createBorder();

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);

private:
    Ui::GReadyVision *ui;
    QSizeGrip *m_sizeGrip;
    QPixmap *m_pixmap;
};
//===============================================
#endif
//===============================================
