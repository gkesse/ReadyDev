//===============================================
#ifndef _GMenuReadyVision_
#define _GMenuReadyVision_
//===============================================
#include "GMenu.h"
//===============================================
namespace Ui {
class GMenuReadyVision;
}
//===============================================
class GMenuReadyVision : public GMenu {
    Q_OBJECT

public:
    GMenuReadyVision(QWidget *parent = 0);
    ~GMenuReadyVision();

public slots:
    void slotAddModule();
    void slotStatusBar();
    void slotAddImageModule();
    void slotAddVideoModule();

private:
    Ui::GMenuReadyVision *ui;
    QMenu* m_addMenu;
};
//===============================================
#endif
//===============================================
