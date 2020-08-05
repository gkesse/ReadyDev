//===============================================
#ifndef _GStatus_
#define _GStatus_
//===============================================
#include "GInclude.h"
//===============================================
class GStatus : public QWidget {
    Q_OBJECT

public:
    GStatus(QWidget *parent = 0);
    virtual ~GStatus();
    static GStatus* Create(QWidget *parent = 0);
    static GStatus* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitStatusBar(const QString& message);
};
//===============================================
#endif
//===============================================
