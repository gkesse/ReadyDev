//===============================================
#ifndef _GSplitter_
#define _GSplitter_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GSplitter;
}
//===============================================
class GSplitter : public QWidget {
    Q_OBJECT

public:
    GSplitter(QWidget *parent = 0);
    ~GSplitter();

private:
    Ui::GSplitter *ui;
};
//===============================================
#endif
//===============================================
