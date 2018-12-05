//===============================================
#ifndef _GTitleReadyVision_
#define _GTitleReadyVision_
//===============================================
#include "GTitle.h"
//===============================================
namespace Ui {
class GTitleReadyVision;
}
//===============================================
class GTitleReadyVision : public GTitle {
    Q_OBJECT

public:
    GTitleReadyVision(QWidget *parent = 0);
    ~GTitleReadyVision();

public slots:
    void slotWindowIconChanged(const QIcon& icon);
    void slotWindowTitleChanged(const QString& title);
    void slotShowMaximized(const QString& status);

private:
    Ui::GTitleReadyVision *ui;
};
//===============================================
#endif
//===============================================
