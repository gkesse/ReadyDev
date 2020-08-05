//===============================================
#ifndef _GProcessDatabase_
#define _GProcessDatabase_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessDatabase : public GProcess {
public:
    GProcessDatabase();
    ~GProcessDatabase();

public:
    static GProcessDatabase* Instance();
    void run(int argc, char **argv);

private:
    static GProcessDatabase* m_instance;
};
//===============================================
#endif
//===============================================
