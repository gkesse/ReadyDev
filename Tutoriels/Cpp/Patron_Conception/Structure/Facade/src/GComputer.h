//===============================================
#ifndef _GComputer_
#define _GComputer_
//===============================================
#include "GCpu.h"
#include "GMemory.h"
#include "GHardDrive.h"
//===============================================
class GComputer {
public:
    GComputer();
    ~GComputer();

public:
    void start();

private:
    GCpu* m_cpu;
    GMemory* m_memory;
    GHardDrive* m_hardDrive;
};
//===============================================
#endif
//===============================================
