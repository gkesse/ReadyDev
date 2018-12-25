//===============================================
#ifndef _GTitleDialogNormal_
#define _GTitleDialogNormal_
//===============================================
#include "GTitle.h"
//===============================================
namespace Ui {
class GTitleDialogNormal;
}
//===============================================
class GTitleDialogNormal : public GTitle {
    Q_OBJECT

public:
    GTitleDialogNormal(QWidget *parent = 0);
    ~GTitleDialogNormal();

public slots:
    void slotWindowIconChanged(const QIcon& icon);
    void slotWindowTitleChanged(const QString& title);

private:
    Ui::GTitleDialogNormal *ui;
};
//===============================================
#endif
//===============================================
