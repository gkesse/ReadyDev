//===============================================
#ifndef _GAlgorithmA_
#define _GAlgorithmA_
//===============================================
#include "GStrategy.h"
//===============================================
class GAlgorithmA : public GStrategy {
private:
    GAlgorithmA();

public:
    ~GAlgorithmA();
    static GAlgorithmA* Instance();

public:
    void execute();

private:
    static GAlgorithmA* m_instance;
};
//===============================================
#endif
//===============================================
