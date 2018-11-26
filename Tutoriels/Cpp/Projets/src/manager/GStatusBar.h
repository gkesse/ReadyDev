//===============================================
#ifndef _GStatusBar_
#define _GStatusBar_
//===============================================
#include "GInclude.h"
//===============================================
class GStatusBar : public QWidget {
    Q_OBJECT

public:
    GStatusBar(QWidget *parent = 0);
    ~GStatusBar();

public slots:
    void slotStatusBar(const QString& text);

protected:
    void resizeEvent(QResizeEvent *event);

private:
    QStatusBar* m_statusBar;
};
//===============================================
#endif
//===============================================
