//===============================================
#ifndef _GButtonCustom_
#define _GButtonCustom_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GButtonCustom;
}
//===============================================
class GButtonCustom : public QWidget {
    Q_OBJECT

public:
    GButtonCustom(QWidget *parent = 0);
    ~GButtonCustom();

private:
    Ui::GButtonCustom *ui;
};
//===============================================
#endif
//===============================================
