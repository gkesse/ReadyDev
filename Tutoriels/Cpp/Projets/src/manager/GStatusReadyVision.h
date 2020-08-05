//===============================================
#ifndef _GStatusReadyVision_
#define _GStatusReadyVision_
//===============================================
#include "GStatus.h"
//===============================================
class GStatusReadyVision : public GStatus {
    Q_OBJECT

public:
    GStatusReadyVision(QWidget *parent = 0);
    ~GStatusReadyVision();

public slots:
    void slotStatusBar(const QString& message);

private:
    QStatusBar* m_statusBar;
};
//===============================================
#endif
//===============================================
