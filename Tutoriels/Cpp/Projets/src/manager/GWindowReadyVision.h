//===============================================
#ifndef _GWindowReadyVision_
#define _GWindowReadyVision_
//===============================================
#include "GWindow.h"
//===============================================
class GWindowReadyVision : public GWindow {
    Q_OBJECT

public:
    GWindowReadyVision(QWidget *parent = 0);
    ~GWindowReadyVision();

public slots:
    void slotShowMaximized();

signals:
    void emitShowMaximized(const QString& status);
};
//===============================================
#endif
//===============================================
