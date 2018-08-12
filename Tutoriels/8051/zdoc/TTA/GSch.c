//===============================================
#include "GSch.h"
//===============================================
//#define SCH_MAX_TASKS (8)
//===============================================
GTask Sch_Tasks_Map[SCH_MAX_TASKS];
//===============================================
void GSch_Go_To_Sleep();
void GSch_Delete_Task(uchar index);
//===============================================
void GSch_Init(uchar ms) {
    uint lPreload = (65536 - ((OSC_FREQ * ms) / (OSC_PER_INST * 1000)));
    uchar lPreloadH = (lPreload / 256);
    uchar lPreloadL = (lPreload % 256);
    uchar lIndex;
    for(lIndex = 0; lIndex < SCH_MAX_TASKS; lIndex++) {
        GSch_Delete_Task(lIndex);
    }
    T2CON = 0x00; 
    TH2 = lPreloadH; 
    RCAP2H = lPreloadH; 
    TL2 = lPreloadL; 
    RCAP2L = lPreloadL;
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
    uchar lIndex;
    for(lIndex = 0; lIndex < SCH_MAX_TASKS; lIndex++) {
        if(Sch_Tasks_Map[lIndex].m_runMe > 0) {
            (*Sch_Tasks_Map[lIndex].pTask)();
            Sch_Tasks_Map[lIndex].m_runMe -= 1;
            if(Sch_Tasks_Map[lIndex].m_period == 0) {
                GSch_Delete_Task(lIndex);
            }
        }
    }
    GSch_Go_To_Sleep();
}
//===============================================
void GSch_Add_Task(void (*pTask)(), uint delay, uint period) {
    uchar lIndex = 0;
    while((Sch_Tasks_Map[lIndex].pTask != 0) && (lIndex < SCH_MAX_TASKS)) lIndex++;
    if(lIndex == SCH_MAX_TASKS) return;
    Sch_Tasks_Map[lIndex].pTask = pTask;
    Sch_Tasks_Map[lIndex].m_delay = delay;
    Sch_Tasks_Map[lIndex].m_period = period;
    Sch_Tasks_Map[lIndex].m_runMe = 0;
}
//===============================================
void GSch_Delete_Task(uchar index) {
    Sch_Tasks_Map[index].pTask = 0x0000;
    Sch_Tasks_Map[index].m_delay = 0;
    Sch_Tasks_Map[index].m_period = 0;
    Sch_Tasks_Map[index].m_runMe = 0;
}
//===============================================
void GSch_Update() interrupt INTERRUPT_TIMER_T2 {
    uchar lIndex;
    TF2 = 0;
    for(lIndex = 0; lIndex < SCH_MAX_TASKS; lIndex++) {
        if(Sch_Tasks_Map[lIndex].pTask != 0) {
            if(Sch_Tasks_Map[lIndex].m_delay == 0) {
                Sch_Tasks_Map[lIndex].m_runMe += 1;
                if(Sch_Tasks_Map[lIndex].m_period != 0) {
                    Sch_Tasks_Map[lIndex].m_delay = Sch_Tasks_Map[lIndex].m_period;
                }
            }
            else {
                Sch_Tasks_Map[lIndex].m_delay -= 1;
            }
        }
    }
}
//===============================================