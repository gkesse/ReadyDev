//===============================================
#include "GDebounce.h"
#include "GDelay.h"
#include "GPortDef.h"
//===============================================
static bit gDebounce_State = 0;
//===============================================
bit GDebounce_Read_Input(uchar debounce);
void GDebounce_Write_Output(bit state);
//===============================================
bit GDebounce_Read_Input(uchar debounce) {
    bit lState = SWITCH_RELEASED;
    if(SWITCH_PIN == 0) {
        GDelay_ms(debounce);
        if(SWITCH_PIN == 0) {
            lState = SWITCH_PRESSED;
        }
    }
    return lState;
}
//===============================================
void GDebounce_Write_Output(bit state) {
    if(state == SWITCH_PRESSED) {
        OUTPUT_PORT = OUTPUT_PRESSED;
    }
    else {
        OUTPUT_PORT = OUTPUT_RELEASED;
    }
}
//===============================================
void GDebounce_Init() {
    SWITCH_PIN = 1;
    OUTPUT_PORT = OUTPUT_RELEASED;
}
//===============================================
void GDebounce_Update() {
    gDebounce_State = GDebounce_Read_Input(30);
    GDebounce_Write_Output(gDebounce_State);
}
//===============================================
