//===============================================
#ifndef _GAddress_
#define _GAddress_
//===============================================
#include "GInclude.h"
//===============================================
class GAddress : public QWidget {
    Q_OBJECT

public:
    GAddress(QWidget *parent = 0);
    virtual ~GAddress();
    static GAddress* Create(QWidget *parent = 0);
    static GAddress* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitUpdateAddress();
    void emitDrivesClicked();
    void emitAddressClicked();
};
//===============================================
#endif
//===============================================
