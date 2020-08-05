//===============================================
#ifndef _GMenu_
#define _GMenu_
//===============================================
#include "GInclude.h"
//===============================================
class GMenu : public QFrame {
    Q_OBJECT

public:
    GMenu(QWidget *parent = 0);
    ~GMenu();
    static GMenu* Create(const string& key);

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
