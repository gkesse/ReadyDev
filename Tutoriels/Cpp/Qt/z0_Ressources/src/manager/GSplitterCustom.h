//===============================================
#ifndef _GSplitterCustom_
#define _GSplitterCustom_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GSplitterCustom;
}
//===============================================
class GSplitterCustom : public QWidget {
    Q_OBJECT

public:
    GSplitterCustom(QWidget *parent = 0);
    ~GSplitterCustom();

public slots:
    void addSlot();
    void removeSlot();

private:
    Ui::GSplitterCustom *ui;
};
//===============================================
#endif
//===============================================
