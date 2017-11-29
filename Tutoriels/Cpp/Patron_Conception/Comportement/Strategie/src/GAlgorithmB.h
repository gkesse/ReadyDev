//===============================================
#ifndef _GAlgorithmB_
#define _GAlgorithmB_
//===============================================
#include "GStrategy.h"
//===============================================
class GAlgorithmB : public GStrategy {
private:
    GAlgorithmB();

public:
    ~GAlgorithmB();
    static GAlgorithmB* Instance();

public:
    void execute();

private:
    static GAlgorithmB* m_instance;
};
//===============================================
#endif
//===============================================
