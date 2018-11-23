//===============================================
#ifndef _GReadyVision_
#define _GReadyVision_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GReadyVision;
}
//===============================================
class GReadyVision : public QWidget {
    Q_OBJECT

public:
    GReadyVision(QWidget *parent = 0);
    ~GReadyVision();

private:
    Ui::GReadyVision *ui;
};
//===============================================
#endif
//===============================================
