//===============================================
#ifndef _GProcessFileStorage_
#define _GProcessFileStorage_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessFileStorage : public GProcess {
public:
    GProcessFileStorage();
    ~GProcessFileStorage();

public:
    static GProcessFileStorage* Instance();
    void run();

private:
    static GProcessFileStorage* m_instance;
};
//===============================================
#endif
//===============================================