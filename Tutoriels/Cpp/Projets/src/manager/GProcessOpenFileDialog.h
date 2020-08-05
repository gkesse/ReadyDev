//===============================================
#ifndef _GProcessOpenFileDialog_
#define _GProcessOpenFileDialog_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessOpenFileDialog : public GProcess {
private:
    GProcessOpenFileDialog();

public:
    ~GProcessOpenFileDialog();
    static GProcessOpenFileDialog* Instance();
    void run(int argc, char **argv);

private:
    static GProcessOpenFileDialog* m_instance;
};
//===============================================
#endif
//===============================================
