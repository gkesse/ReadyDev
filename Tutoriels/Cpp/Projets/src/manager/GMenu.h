//===============================================
#ifndef _GMenu_
#define _GMenu_
//===============================================
#include "GInclude.h"
//===============================================
class GMenu : public QWidget {
    Q_OBJECT

public:
    GMenu(QWidget *parent = 0);
    virtual ~GMenu();
    static GMenu* Create(QWidget *parent = 0);
    static GMenu* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitStatusBar(const QString& message);
    void emitAddModule(const QString& module);
    void emitAddImageModule();
    void emitAddVideoModule();
    void emitLoadImage();
    void emitHomeClicked();
    void emitDrivesClicked();
};
//===============================================
#endif
//===============================================
