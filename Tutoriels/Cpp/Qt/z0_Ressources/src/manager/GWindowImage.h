//===============================================
#ifndef _GWindowImage_
#define _GWindowImage_
//================================================
#include "GWindowA.h"
//===============================================
class GWindowImage : public GWindowA {
    Q_OBJECT

public:
    GWindowImage(QWidget* parent = 0);
    ~GWindowImage();

protected:
    void paintEvent(QPaintEvent *event);

private:
    QWidget* m_mainPage;
    QImage* m_image;
};
//===============================================
#endif
//===============================================
