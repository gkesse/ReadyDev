//===============================================
#ifndef _GWorkspace_
#define _GWorkspace_
//===============================================
#include "GInclude.h"
//===============================================
class GWorkspace : public QWidget {
    Q_OBJECT

public:
    GWorkspace(QWidget *parent = 0);
    virtual ~GWorkspace();
    static GWorkspace* Create(QWidget *parent = 0);
    static GWorkspace* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitHomeClicked();
    void emitDrivesClicked();
    void emitUpdateAddress();
    void emitAddressClicked();
    void emitOkButtonEnable(const bool& arg);
    void emitWorkspaceView(const int& id);
};
//===============================================
#endif
//===============================================
