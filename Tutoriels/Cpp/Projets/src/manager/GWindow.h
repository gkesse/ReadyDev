//===============================================
#ifndef _GWindow_
#define _GWindow_
//===============================================
#include "GInclude.h"
//===============================================
class GWindow : public QWidget {
    Q_OBJECT

public:
    GWindow(QWidget *parent = 0);
    virtual ~GWindow();
    static GWindow* Create(QWidget *parent = 0);
    static GWindow* Create(const QString& key, QWidget *parent = 0);

signals:
    void emitShowMaximized(const QString& status);

protected:
    QGridLayout* m_mainLayout;
};
//===============================================
#endif
//===============================================
