//================================================
#ifndef _GStrategyPython_
#define _GStrategyPython_
//================================================
#include "GStrategy.h"
//================================================
class GStrategyPython : public GStrategy {
public:
    GStrategyPython();
    ~GStrategyPython();

public:
    static GStrategyPython* Instance();
    void print() const;

private:
    static GStrategyPython* m_instance;
};
//================================================
#endif
//================================================
