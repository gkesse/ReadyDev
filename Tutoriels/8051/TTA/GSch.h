//===============================================
#ifndef _GSch_
#define _GSch_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GTask GTask;
//===============================================
struct GTask {
    void (*pTask)();
    uint m_delay;
    uint m_period;
    uchar m_runMe;
};
//===============================================
void GSch_Init(uchar ms);
void GSch_Start();
void GSch_Dispatch_Tasks();
void GSch_Add_Task(void (*pTask)(), uint delay, uint period);
//===============================================
#endif
//===============================================