//===============================================
#ifndef _GSectionReadyVision_
#define _GSectionReadyVision_
//===============================================
#include "GSection.h"
#include "GModule.h"
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
    void slotModuleAdd(const QString &module);
    void slotModuleClick(GModule* module);

private:
    Ui::GSectionReadyVision* ui;
    QList<GModule*> m_moduleMap;
};
//===============================================
#endif
//===============================================
