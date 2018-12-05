//===============================================
#ifndef _GModule_
#define _GModule_
//===============================================
#include "GInclude.h"
//===============================================
class GModule : public QWidget {
    Q_OBJECT

public:
    GModule(QWidget *parent = 0);
    virtual ~GModule();
    static GModule* Create(QWidget *parent = 0);
    static GModule* Create(const QString &key, QWidget *parent = 0);

signals:
    void emitStatusBar(const QString& text);

private:
    static int m_moduleCount;
};
//===============================================
#endif
//===============================================
