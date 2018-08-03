//===============================================
#include "GSch.h"
//===============================================
#define SCH_MAX_TASKS (8)
//===============================================
GTask Sch_Tasks_Map[SCH_MAX_TASKS];
//===============================================
void GSch_Go_To_Sleep();
void GSch_Delete_Task(uchar index);
//===============================================
void GSch_Init(uchar ms) {
    uint m_PRELOAD = (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)));
    uchar m_PRELOADH = (m_PRELOAD / 256);
    uchar m_PRELOADL = (m_PRELOAD % 256);
    uchar index;
    for(index = 0; index < SCH_MAX_TASKS; index++) {
        GSch_Delete_Task(index);
    }
    T2CON = 0x00; 
    TH2 = m_PRELOADH; 
    RCAP2H = m_PRELOADH; 
    TL2 = m_PRELOADL; 
    RCAP2L = m_PRELOADL;
    ET2 = 1;
    TR2 = 1;
}
//===============================================
void GSch_Start() {
    EA = 1;
}
//===============================================
void GSch_Go_To_Sleep() {
    PCON |= 0x01;
}
//===============================================
void GSch_Dispatch_Tasks() {
    uchar index;
    for(index = 0; index < SCH_MAX_TASKS; index++) {
        if(Sch_Tasks_Map[index].runMe > 0) {
            (*Sch_Tasks_Map[index].pTask)();
            Sch_Tasks_Map[index].runMe -= 1;
            if(Sch_Tasks_Map[index].period == 0) {
                GSch_Delete_Task(index);
            }
        }
    }
    GSch_Go_To_Sleep();
}
//===============================================
void GSch_Add_Task(void (*pTask)(), uint delay, uint period) {
    uchar index = 0;
    while((Sch_Tasks_Map[index].pTask != 0) && (index < SCH_MAX_TASKS)) index++;
    if(index == SCH_MAX_TASKS) return;
    Sch_Tasks_Map[index].pTask = pTask;
    Sch_Tasks_Map[index].delay = delay;
    Sch_Tasks_Map[index].period = period;
    Sch_Tasks_Map[index].runMe = 0;
}
//===============================================
void GSch_Delete_Task(uchar index) {
    Sch_Tasks_Map[index].pTask = 0x0000;
    Sch_Tasks_Map[index].delay = 0;
    Sch_Tasks_Map[index].period = 0;
    Sch_Tasks_Map[index].runMe = 0;
}
//===============================================
void GSch_Update() interrupt INTERRUPT_TIMER_T2 {
    uchar index;
    TF2 = 0;
    for(index = 0; index < SCH_MAX_TASKS; index++) {
        if(Sch_Tasks_Map[index].pTask != 0) {
            if(Sch_Tasks_Map[index].delay == 0) {
                Sch_Tasks_Map[index].runMe += 1;
                if(Sch_Tasks_Map[index].period != 0) {
                    Sch_Tasks_Map[index].delay = Sch_Tasks_Map[index].period;
                }
            }
            else {
                Sch_Tasks_Map[index].delay -= 1;
            }
        }
    }
}
//===============================================