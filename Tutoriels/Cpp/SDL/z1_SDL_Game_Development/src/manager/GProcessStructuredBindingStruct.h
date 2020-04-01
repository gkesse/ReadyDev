//===============================================
#ifndef _GProcessStructuredBindingStruct_
#define _GProcessStructuredBindingStruct_
//===============================================
#include "GProcess.h"
//===============================================
typedef struct {
    int fraction;
    int remainder;
} GStruct;
//===============================================
class GProcessStructuredBindingStruct : public GProcess {
public:
    GProcessStructuredBindingStruct();
    ~GProcessStructuredBindingStruct();

public:
    static GProcessStructuredBindingStruct* Instance();
    void run();
    GStruct divide(int dividend, int divisor);

private:
    static GProcessStructuredBindingStruct* m_instance;
};
//===============================================
#endif
//===============================================
