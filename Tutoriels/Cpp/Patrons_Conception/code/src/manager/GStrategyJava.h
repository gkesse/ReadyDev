//================================================
#ifndef _GStrategyJava_
#define _GStrategyJava_
//================================================
#include "GStrategy.h"
//================================================
class GStrategyJava : public GStrategy {
public:
    GStrategyJava();
    ~GStrategyJava();

public:
    static GStrategyJava* Instance();
    void print() const;

private:
    static GStrategyJava* m_instance;
};
//================================================
#endif
//================================================
