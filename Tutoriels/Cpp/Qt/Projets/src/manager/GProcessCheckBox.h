//===============================================
#ifndef _GProcessCheckBox_
#define _GProcessCheckBox_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessCheckBox : public GProcess {
public:
    GProcessCheckBox();
    ~GProcessCheckBox();

public:
    static GProcessCheckBox* Instance();
    void run(int argc, char **argv);

private:
    static GProcessCheckBox* m_instance;
};
//===============================================
#endif
//===============================================
