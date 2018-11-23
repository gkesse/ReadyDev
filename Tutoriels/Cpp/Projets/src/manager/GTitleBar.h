//===============================================
#ifndef _GTitleBar_
#define _GTitleBar_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GTitleBar;
}
//===============================================
class GTitleBar : public QWidget {
    Q_OBJECT

public:
    GTitleBar(QWidget *parent = 0);
    ~GTitleBar();

private:
    void createTitleBar();
    void createButtons();

public slots:
    void slotWindowTitleChanged(const QString &title);

protected:
    void paintEvent(QPaintEvent *event);
    void resizeEvent(QResizeEvent *event);

private:
    Ui::GTitleBar *ui;
    QPixmap *m_titleBar;
    QLabel *m_title;
};
//===============================================
#endif
//===============================================
