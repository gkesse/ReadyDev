
//===============================================
#include "GSeos.h"
#include "GTrafficLights.h"
//===============================================
void main() {
	GSeos_Init(1);
	GTrafficLights_Init();
	GSeos_Start();
    
	while(1) {
		GSeos_Go_To_Sleep();
	}
}
//===============================================