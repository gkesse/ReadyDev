//===============================================
#ifndef _GProcessRadioButton_
#define _GProcessRadioButton_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessRadioButton : public GProcess {
public:
    GProcessRadioButton();
    ~GProcessRadioButton();

public:
    static GProcessRadioButton* Instance();
    void run(int argc, char **argv);

private:
    static GProcessRadioButton* m_instance;
};
//===============================================
#endif
//===============================================
