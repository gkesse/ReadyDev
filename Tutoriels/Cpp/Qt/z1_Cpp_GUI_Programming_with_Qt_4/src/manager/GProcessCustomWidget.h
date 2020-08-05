//===============================================
#ifndef _GProcessCustomWidget_
#define _GProcessCustomWidget_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessCustomWidget : public GProcess {
public:
    GProcessCustomWidget();
    ~GProcessCustomWidget();

public:
    static GProcessCustomWidget* Instance();
    void run();

private:
    static GProcessCustomWidget* m_instance;
};
//===============================================
#endif
//===============================================
