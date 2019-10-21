//===============================================
#ifndef _GWindowA_
#define _GWindowA_
//================================================
#include "GInclude.h"
//===============================================
class GWindowA : public QWidget {
    Q_OBJECT

public:
    GWindowA(QWidget* parent = 0);
    virtual ~GWindowA();

public:
    static GWindowA* Create(QWidget* parent = 0);
    static GWindowA* Create(const QString& window, QWidget* parent = 0);
    virtual void run() {}
};
//===============================================
#endif
//===============================================
