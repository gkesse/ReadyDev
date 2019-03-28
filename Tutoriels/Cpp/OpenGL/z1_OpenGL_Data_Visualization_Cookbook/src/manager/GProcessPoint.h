//===============================================
#ifndef _GProcessPoint_
#define _GProcessPoint_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct sVertex Vertex;
//===============================================
class GProcessPoint : public GProcess {
public:
    GProcessPoint();
    ~GProcessPoint();

public:
    static GProcessPoint* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessPoint* m_instance;
};
//===============================================
#endif
//===============================================
