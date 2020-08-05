//===============================================
#ifndef _GTitleWindowFullScreen_
#define _GTitleWindowFullScreen_
//===============================================
#include "GTitle.h"
//===============================================
namespace Ui {
class GTitleWindowFullScreen;
}
//===============================================
class GTitleWindowFullScreen : public GTitle {
    Q_OBJECT

public:
    GTitleWindowFullScreen(QWidget *parent = 0);
    ~GTitleWindowFullScreen();

public slots:
    void slotWindowIconChanged(const QIcon& icon);
    void slotWindowTitleChanged(const QString& title);

private:
    Ui::GTitleWindowFullScreen *ui;
};
//===============================================
#endif
//===============================================
