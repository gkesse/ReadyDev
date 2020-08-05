//===============================================
#ifndef _GDialogOpenFile_
#define _GDialogOpenFile_
//===============================================
#include "GDialogNormal.h"
//===============================================
class GDialogOpenFile : public GDialogNormal {
    Q_OBJECT

public:
    GDialogOpenFile(QWidget *parent = 0);
    ~GDialogOpenFile();
};
//===============================================
#endif
//===============================================
