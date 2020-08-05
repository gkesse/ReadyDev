//===============================================
#ifndef _GProcessToolButton_
#define _GProcessToolButton_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessToolButton : public GProcess {
public:
    GProcessToolButton();
    ~GProcessToolButton();

public:
    static GProcessToolButton* Instance();
    void run(int argc, char **argv);

private:
    static GProcessToolButton* m_instance;
};
//===============================================
#endif
//===============================================
