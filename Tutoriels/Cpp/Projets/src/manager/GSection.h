//===============================================
#ifndef _GSection_
#define _GSection_
//===============================================
#include "GInclude.h"
//===============================================
class GSection : public QWidget {
    Q_OBJECT

public:
    GSection(QWidget *parent = 0);
    virtual ~GSection();
    static GSection* Create(QWidget *parent = 0);
    static GSection* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitStatusBar(const QString& message);
    void emitAddModule(const QString& module);
    void emitWorkspaceView(const int& id);
};
//===============================================
#endif
//===============================================
