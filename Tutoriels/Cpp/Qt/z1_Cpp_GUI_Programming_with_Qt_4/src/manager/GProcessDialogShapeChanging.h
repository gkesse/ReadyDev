//===============================================
#ifndef _GProcessDialogShapeChanging_
#define _GProcessDialogShapeChanging_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessDialogShapeChanging : public GProcess {
public:
    GProcessDialogShapeChanging();
    ~GProcessDialogShapeChanging();

public:
    static GProcessDialogShapeChanging* Instance();
    void run();

private:
    static GProcessDialogShapeChanging* m_instance;
};
//===============================================
#endif
//===============================================
