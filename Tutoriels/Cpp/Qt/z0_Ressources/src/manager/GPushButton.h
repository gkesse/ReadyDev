//===============================================
#ifndef _GPushButton_
#define _GPushButton_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GPushButton;
}
//===============================================
class GPushButton : public QWidget {
    Q_OBJECT

public:
    GPushButton(QWidget *parent = 0);
    ~GPushButton();

public slots:
    void createSlot();
    void readSlot();
    void updateSlot();
    void deleteSlot();

private:
    Ui::GPushButton *ui;
};
//===============================================
#endif
//===============================================
