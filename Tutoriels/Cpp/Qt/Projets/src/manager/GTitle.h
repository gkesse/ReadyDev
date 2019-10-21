//===============================================
#ifndef _GTitle_
#define _GTitle_
//===============================================
#include "GInclude.h"
//===============================================
class GTitle : public QFrame {
    Q_OBJECT

public:
    GTitle(QWidget *parent = 0);
    ~GTitle();
    static GTitle* Create(const string& key);

signals:
    void emitWindowTitle(const QString& title);
    void emitWindowIcon(const QIcon& icon);
    void emitWindowMinimize();
    void emitWindowMaximize();
    void emitWindowClose();
};
//===============================================
#endif
//===============================================
