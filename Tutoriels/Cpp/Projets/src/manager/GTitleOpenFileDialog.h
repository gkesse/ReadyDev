//===============================================
#ifndef _GTitleOpenFileDialog_
#define _GTitleOpenFileDialog_
//===============================================
#include "GTitle.h"
//===============================================
namespace Ui {
class GTitleOpenFileDialog;
}
//===============================================
class GTitleOpenFileDialog : public GTitle {
    Q_OBJECT

public:
    GTitleOpenFileDialog(QWidget *parent = 0);
    ~GTitleOpenFileDialog();

public slots:
    void slotWindowIconChanged(const QIcon& icon);
    void slotWindowTitleChanged(const QString& title);

private:
    Ui::GTitleOpenFileDialog *ui;
};
//===============================================
#endif
//===============================================
