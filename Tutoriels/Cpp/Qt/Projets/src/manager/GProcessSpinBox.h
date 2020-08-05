//===============================================
#ifndef _GProcessSlider_
#define _GProcessSlider_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessSlider : public GProcess {
public:
    GProcessSlider();
    ~GProcessSlider();

public:
    static GProcessSlider* Instance();
    void run(int argc, char **argv);

private:
    static GProcessSlider* m_instance;
};
//===============================================
#endif
//===============================================
