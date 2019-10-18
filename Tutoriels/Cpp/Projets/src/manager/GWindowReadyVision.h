//===============================================
#ifndef _GWindowReadyVision_
#define _GWindowReadyVision_
//===============================================
#include "GWindowMaximized.h"
//===============================================
class GWindowReadyVision : public GWindowMaximized {
    Q_OBJECT

public:
    GWindowReadyVision(QWidget *parent = 0);
    ~GWindowReadyVision();
};
//===============================================
#endif
//===============================================
