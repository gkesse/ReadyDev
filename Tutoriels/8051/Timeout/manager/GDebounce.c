//===============================================
#include "GDebounce.h"
#include "GPortDef.h"
#include "GDelay.h"
//===============================================
static bit gDebounce_State = 0;
static uint gDebounce_Count = 0;
//===============================================
bit GDebounce_Read_Input(uchar debounce);
void GDebounce_Write_Output(uint count);
//===============================================
void GDebounce_Init() {
    SWITCH_PIN = 1;
    COUNTER_PORT = COUNTER_OFF;
}
//===============================================
void GDebounce_Update() {
    gDebounce_State = GDebounce_Read_Input(30);
    if(gDebounce_State == SWITCH_PRESSED) gDebounce_Count++;
    GDebounce_Write_Output(gDebounce_Count);
}
//===============================================
bit GDebounce_Read_Input(uchar debounce) {
    bit lState = SWITCH_RELEASED;
    ulong lTimeout = LOOP_TIMEOUT_INIT_1000ms;
    
    if(SWITCH_PIN == 0) {
        GDelay_ms(debounce);
        if(SWITCH_PIN == 0) {
            while((SWITCH_PIN == 0) && (++lTimeout != 0));
            if (lTimeout == 0) {
                lState = SWITCH_RELEASED;
                TIMEOUT_PIN = !TIMEOUT_PIN;
            }
            else {
                lState = SWITCH_PRESSED;
            }
        }
    }
    
    return lState;
}
//===============================================
void GDebounce_Write_Output(uint count) {
    COUNTER_PORT = ~count;
}
//===============================================
