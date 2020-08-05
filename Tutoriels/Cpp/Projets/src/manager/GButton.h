//===============================================
#ifndef _GButton_
#define _GButton_
//===============================================
#include "GInclude.h"
//===============================================
class GButton : public QWidget {
    Q_OBJECT

public:
    GButton(QWidget *parent = 0);
    virtual ~GButton();
    static GButton* Create(QWidget *parent = 0);
    static GButton* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitAccept();
    void emitReject();
    void emitOkButtonEnable(const bool& arg);
};
//===============================================
#endif
//===============================================
