//===============================================
#ifndef _GTitle_
#define _GTitle_
//===============================================
#include "GInclude.h"
//===============================================
class GTitle : public QWidget {
    Q_OBJECT

public:
    GTitle(QWidget *parent = 0);
    virtual ~GTitle();
    static GTitle* Create(QWidget *parent = 0);
    static GTitle* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitReject();
    void emitClose();
    void emitShowMinimized();
    void emitShowMaximized();
    void emitShowMaximized(const QString& status);
    void emitWindowIconChanged(const QIcon& icon);
    void emitWindowTitleChanged(const QString& icon);
};
//===============================================
#endif
//===============================================
