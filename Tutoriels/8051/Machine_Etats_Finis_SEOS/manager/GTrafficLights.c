//===============================================
#include "GTrafficLights.h"
#include "GPortDef.h"
//===============================================
enum eGLight {RED, RED_AMBER, RED_RED_1, GREEN, AMBER, RED_RED_2};
//===============================================
typedef enum eGLight eGLight;
//===============================================
static eGLight gLight_L1_State = RED;
static eGLight gLight_L2_State = GREEN;
//===============================================
static uint gLight_L1_Time = 0;
static uint gLight_L2_Time = 0;
static uint gLight_L1_Duration = 0;
static uint gLight_L2_Duration = 0;
//===============================================
void GTrafficLights_Init() {
    LIGHT_RED_L1 = LIGHT_OFF;
    LIGHT_AMBER_L1 = LIGHT_OFF;
    LIGHT_GREEN_L1 = LIGHT_OFF;
    
    LIGHT_RED_L2 = LIGHT_OFF;
    LIGHT_AMBER_L2 = LIGHT_OFF;
    LIGHT_GREEN_L2 = LIGHT_OFF;
}
//===============================================
void GTrafficLights_Light_L1() {
    if(++gLight_L1_Time >= 100) {
        gLight_L1_Time = 0;
        switch(gLight_L1_State) {
            case RED: {
                LIGHT_RED_L1 = LIGHT_ON;
                LIGHT_AMBER_L1 = LIGHT_OFF;
                LIGHT_GREEN_L1 = LIGHT_OFF;
                if(++gLight_L1_Duration >= LIGHT_RED_DURATION) {
                    gLight_L1_State = RED_AMBER;
                    gLight_L1_Duration = 0;    
                } 
                break;
            }
            case RED_AMBER: {
                LIGHT_RED_L1 = LIGHT_ON;
                LIGHT_AMBER_L1 = LIGHT_OFF;
                LIGHT_GREEN_L1 = LIGHT_OFF;
                if(++gLight_L1_Duration >= LIGHT_RED_AMBER_DURATION) {
                    gLight_L1_State = RED_RED_1;
                    gLight_L1_Duration = 0;    
                } 
                break;
            }
            case RED_RED_1: {
                LIGHT_RED_L1 = LIGHT_ON;
                LIGHT_AMBER_L1 = LIGHT_OFF;
                LIGHT_GREEN_L1 = LIGHT_OFF;
                if(++gLight_L1_Duration >= LIGHT_RED_RED_1_DURATION) {
                    gLight_L1_State = GREEN;
                    gLight_L1_Duration = 0;    
                } 
                break;
            }
            case GREEN: {
                LIGHT_RED_L1 = LIGHT_OFF;
                LIGHT_AMBER_L1 = LIGHT_OFF;
                LIGHT_GREEN_L1 = LIGHT_ON;
                if(++gLight_L1_Duration >= LIGHT_GREEN_DURATION) {
                    gLight_L1_State = AMBER;
                    gLight_L1_Duration = 0;    
                } 
                break;
            }
            case AMBER: {
                LIGHT_RED_L1 = LIGHT_OFF;
                LIGHT_AMBER_L1 = LIGHT_ON;
                LIGHT_GREEN_L1 = LIGHT_OFF;
                if(++gLight_L1_Duration >= LIGHT_AMBER_DURATION) {
                    gLight_L1_State = RED_RED_2;
                    gLight_L1_Duration = 0;    
                } 
                break;
            }
            case RED_RED_2: {
                LIGHT_RED_L1 = LIGHT_ON;
                LIGHT_AMBER_L1 = LIGHT_OFF;
                LIGHT_GREEN_L1 = LIGHT_OFF;
                if(++gLight_L1_Duration >= LIGHT_RED_RED_2_DURATION) {
                    gLight_L1_State = RED;
                    gLight_L1_Duration = 0;    
                } 
                break;
            }
        }
    }
}
//===============================================
void GTrafficLights_Light_L2() {
    if(++gLight_L2_Time >= 100) {
        gLight_L2_Time = 0;
        switch(gLight_L2_State) {
            case RED: {
                LIGHT_RED_L2 = LIGHT_ON;
                LIGHT_AMBER_L2 = LIGHT_OFF;
                LIGHT_GREEN_L2 = LIGHT_OFF;
                if(++gLight_L2_Duration >= LIGHT_RED_DURATION) {
                    gLight_L2_State = RED_AMBER;
                    gLight_L2_Duration = 0;    
                } 
                break;
            }
            case RED_AMBER: {
                LIGHT_RED_L2 = LIGHT_ON;
                LIGHT_AMBER_L2 = LIGHT_OFF;
                LIGHT_GREEN_L2 = LIGHT_OFF;
                if(++gLight_L2_Duration >= LIGHT_RED_AMBER_DURATION) {
                    gLight_L2_State = RED_RED_1;
                    gLight_L2_Duration = 0;    
                } 
                break;
            }
            case RED_RED_1: {
                LIGHT_RED_L2 = LIGHT_ON;
                LIGHT_AMBER_L2 = LIGHT_OFF;
                LIGHT_GREEN_L2 = LIGHT_OFF;
                if(++gLight_L2_Duration >= LIGHT_RED_RED_1_DURATION) {
                    gLight_L2_State = GREEN;
                    gLight_L2_Duration = 0;    
                } 
                break;
            }
            case GREEN: {
                LIGHT_RED_L2 = LIGHT_OFF;
                LIGHT_AMBER_L2 = LIGHT_OFF;
                LIGHT_GREEN_L2 = LIGHT_ON;
                if(++gLight_L2_Duration >= LIGHT_GREEN_DURATION) {
                    gLight_L2_State = AMBER;
                    gLight_L2_Duration = 0;    
                } 
                break;
            }
            case AMBER: {
                LIGHT_RED_L2 = LIGHT_OFF;
                LIGHT_AMBER_L2 = LIGHT_ON;
                LIGHT_GREEN_L2 = LIGHT_OFF;
                if(++gLight_L2_Duration >= LIGHT_AMBER_DURATION) {
                    gLight_L2_State = RED_RED_2;
                    gLight_L2_Duration = 0;    
                } 
                break;
            }
            case RED_RED_2: {
                LIGHT_RED_L2 = LIGHT_ON;
                LIGHT_AMBER_L2 = LIGHT_OFF;
                LIGHT_GREEN_L2 = LIGHT_OFF;
                if(++gLight_L2_Duration >= LIGHT_RED_RED_2_DURATION) {
                    gLight_L2_State = RED;
                    gLight_L2_Duration = 0;    
                } 
                break;
            }
        }
    }
}
//===============================================
