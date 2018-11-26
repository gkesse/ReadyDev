//===============================================
#ifndef _GTitleBar_
#define _GTitleBar_
//===============================================
#include "GInclude.h"
//===============================================
class GTitleBar : public QWidget {
    Q_OBJECT

public:
    GTitleBar(QWidget *parent = 0);
    ~GTitleBar();

private:
    void createPixmap();
    void createBackground();
    void createButtonMap();

public slots:
    void slotWindowTitleChanged(const QString &title);
    void slotWindowIconChanged(const QIcon &icon);
    void slotMinimize();
    void slotMaximize();

protected:
    void paintEvent(QPaintEvent *event);
    void resizeEvent(QResizeEvent *event);
    void mousePressEvent(QMouseEvent *event);
    void mouseMoveEvent(QMouseEvent *event);
    void mouseReleaseEvent(QMouseEvent *event);

private:
    QPixmap *m_pixmap;
    QLabel *m_title;
    QLabel *m_icon;
    QToolButton* m_minimizeButton;
    QToolButton* m_maximizeButton;
    QToolButton* m_closeButton;
    int m_diffX;
    int m_diffY;
};
//===============================================
#endif
//===============================================
