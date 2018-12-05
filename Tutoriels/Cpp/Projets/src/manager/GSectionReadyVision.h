//===============================================
#ifndef _GSectionReadyVision_
#define _GSectionReadyVision_
//===============================================
#include "GSection.h"
//===============================================
namespace Ui {
class GSectionReadyVision;
}
//===============================================
class GSectionReadyVision : public GSection {
    Q_OBJECT

public:
    GSectionReadyVision(QWidget *parent = 0);
    ~GSectionReadyVision();

public slots:
    void slotAddModule(const QString &module);

private:
    Ui::GSectionReadyVision* ui;
};
//===============================================
#endif
//===============================================
