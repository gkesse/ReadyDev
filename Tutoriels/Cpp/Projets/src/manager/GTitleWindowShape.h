//===============================================
#ifndef _GTitleWindowShape_
#define _GTitleWindowShape_
//===============================================
#include "GTitle.h"
//===============================================
namespace Ui {
class GTitleWindowShape;
}
//===============================================
class GTitleWindowShape : public GTitle {
    Q_OBJECT

public:
    GTitleWindowShape(QWidget *parent = 0);
    ~GTitleWindowShape();

public slots:
    void slotWindowIconChanged(const QIcon& icon);
    void slotWindowTitleChanged(const QString& title);
    void slotShowMaximized(const QString& status);

private:
    Ui::GTitleWindowShape *ui;
};
//===============================================
#endif
//===============================================
