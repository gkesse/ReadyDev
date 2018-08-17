//===============================================
#include "GTimeElapse.h"
#include "GRS232.h"
//===============================================
static uint gTimeElapse_Time = 200;
static ulong gTimeElapse_Second = 0;
//===============================================
void GTimeElapse_Get_Time();
//===============================================
void GTimeElapse_Init() {

}
//===============================================
void GTimeElapse_Update() {
    if(++gTimeElapse_Time >= 200) {
        gTimeElapse_Time = 0;
        GTimeElapse_Get_Time();
        gTimeElapse_Second++;
    }
}
//===============================================
void GTimeElapse_Get_Time() {
    uchar lSecond;
    uchar lMinute;
    uchar lHour;
    ulong lTime;
    
    lTime = gTimeElapse_Second;
    lSecond = lTime % 60;
    lTime /= 60;
    lMinute = lTime % 60;
    lTime /= 60;
    lHour = lTime;
    
    GRS232_Write_String("\f");
    GRS232_Write_String("Temps: ");
    GRS232_Write_Int(lHour, 2);
    GRS232_Write_String(":");
    GRS232_Write_Int(lMinute, 2);
    GRS232_Write_String(":");
    GRS232_Write_Int(lSecond, 2);
}
//===============================================
