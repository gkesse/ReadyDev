//===============================================
#include "GTrafficLights.h"
#include "GPortDef.h"
//===============================================
typedef enum eGLight GLight;
//===============================================
enum eGLight {RED, RED_AMBER, RED_RED_1, GREEN, AMBER, RED_RED_2};
//===============================================
static GLight gLight_State_L1;
static GLight gLight_State_L2;
//===============================================
static uint gState_Light_L2_Time;
static uint gState_Light_L1_Time;
//===============================================
void GState_Init() {
    gLight_State_L1 = RED;
    gLight_State_L2 = GREEN;
    
    gState_Light_L1_Time = 0;
    gState_Light_L2_Time = 0;
}
//===============================================
void GState_Light_L1() {
    switch(gLight_State_L1) {
        case RED: {
            LIGHT_RED_L1 = LIGHT_ON;
            LIGHT_AMBER_L1 = LIGHT_OFF;
            LIGHT_GREEN_L1 = LIGHT_OFF;
            if(++gState_Light_L1_Time >= LIGHT_RED_DURATION) {
                gLight_State_L1 = RED_AMBER;
                gState_Light_L1_Time = 0;    
            } 
            break;
        }
        case RED_AMBER: {
            LIGHT_RED_L1 = LIGHT_ON;
            LIGHT_AMBER_L1 = LIGHT_OFF;
            LIGHT_GREEN_L1 = LIGHT_OFF;
            if(++gState_Light_L1_Time >= LIGHT_RED_AMBER_DURATION) {
                gLight_State_L1 = RED_RED_1;
                gState_Light_L1_Time = 0;    
            } 
            break;
        }
        case RED_RED_1: {
            LIGHT_RED_L1 = LIGHT_ON;
            LIGHT_AMBER_L1 = LIGHT_OFF;
            LIGHT_GREEN_L1 = LIGHT_OFF;
            if(++gState_Light_L1_Time >= LIGHT_RED_RED_1_DURATION) {
                gLight_State_L1 = GREEN;
                gState_Light_L1_Time = 0;    
            } 
            break;
        }
        case GREEN: {
            LIGHT_RED_L1 = LIGHT_OFF;
            LIGHT_AMBER_L1 = LIGHT_OFF;
            LIGHT_GREEN_L1 = LIGHT_ON;
            if(++gState_Light_L1_Time >= LIGHT_GREEN_DURATION) {
                gLight_State_L1 = AMBER;
                gState_Light_L1_Time = 0;    
            } 
            break;
        }
        case AMBER: {
            LIGHT_RED_L1 = LIGHT_OFF;
            LIGHT_AMBER_L1 = LIGHT_ON;
            LIGHT_GREEN_L1 = LIGHT_OFF;
            if(++gState_Light_L1_Time >= LIGHT_AMBER_DURATION) {
                gLight_State_L1 = RED_RED_2;
                gState_Light_L1_Time = 0;    
            } 
            break;
        }
        case RED_RED_2: {
            LIGHT_RED_L1 = LIGHT_ON;
            LIGHT_AMBER_L1 = LIGHT_OFF;
            LIGHT_GREEN_L1 = LIGHT_OFF;
            if(++gState_Light_L1_Time >= LIGHT_RED_RED_2_DURATION) {
                gLight_State_L1 = RED;
                gState_Light_L1_Time = 0;    
            } 
            break;
        }
    }

}
//===============================================
void GState_Light_L2() {
    switch(gLight_State_L2) {
        case RED: {
            LIGHT_RED_L2 = LIGHT_ON;
            LIGHT_AMBER_L2 = LIGHT_OFF;
            LIGHT_GREEN_L2 = LIGHT_OFF;
            if(++gState_Light_L2_Time >= LIGHT_RED_DURATION) {
                gLight_State_L2 = RED_AMBER;
                gState_Light_L2_Time = 0;    
            } 
            break;
        }
        case RED_AMBER: {
            LIGHT_RED_L2 = LIGHT_ON;
            LIGHT_AMBER_L2 = LIGHT_OFF;
            LIGHT_GREEN_L2 = LIGHT_OFF;
            if(++gState_Light_L2_Time >= LIGHT_RED_AMBER_DURATION) {
                gLight_State_L2 = RED_RED_1;
                gState_Light_L2_Time = 0;    
            } 
            break;
        }
        case RED_RED_1: {
            LIGHT_RED_L2 = LIGHT_ON;
            LIGHT_AMBER_L2 = LIGHT_OFF;
            LIGHT_GREEN_L2 = LIGHT_OFF;
            if(++gState_Light_L2_Time >= LIGHT_RED_RED_1_DURATION) {
                gLight_State_L2 = GREEN;
                gState_Light_L2_Time = 0;    
            } 
            break;
        }
        case GREEN: {
            LIGHT_RED_L2 = LIGHT_OFF;
            LIGHT_AMBER_L2 = LIGHT_OFF;
            LIGHT_GREEN_L2 = LIGHT_ON;
            if(++gState_Light_L2_Time >= LIGHT_GREEN_DURATION) {
                gLight_State_L2 = AMBER;
                gState_Light_L2_Time = 0;    
            } 
            break;
        }
        case AMBER: {
            LIGHT_RED_L2 = LIGHT_OFF;
            LIGHT_AMBER_L2 = LIGHT_ON;
            LIGHT_GREEN_L2 = LIGHT_OFF;
            if(++gState_Light_L2_Time >= LIGHT_AMBER_DURATION) {
                gLight_State_L2 = RED_RED_2;
                gState_Light_L2_Time = 0;    
            } 
            break;
        }
        case RED_RED_2: {
            LIGHT_RED_L2 = LIGHT_ON;
            LIGHT_AMBER_L2 = LIGHT_OFF;
            LIGHT_GREEN_L2 = LIGHT_OFF;
            if(++gState_Light_L2_Time >= LIGHT_RED_RED_2_DURATION) {
                gLight_State_L2 = RED;
                gState_Light_L2_Time = 0;    
            } 
            break;
        }
    }
}
//===============================================
