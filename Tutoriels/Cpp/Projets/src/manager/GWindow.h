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

protected:
    void resizeEvent(QResizeEvent *event);
    void paintEvent(QPaintEvent *event);

signals:
    void emitReject();
    void emitWindowIconChanged(const QIcon& icon);
    void emitWindowTitleChanged(const QString& icon);

private:
    QPixmap* m_pixmap;
};
//===============================================
#endif
//===============================================
