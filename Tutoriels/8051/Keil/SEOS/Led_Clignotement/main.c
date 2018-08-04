
//===============================================
#include "GSeos.h"
#include "GLedFlash.h"
//===============================================
void main() {
	GSeos_Init(1);
	GLedFlash_Init();
	GSeos_Start();
    
	while(1) {
		GSeos_Go_To_Sleep();
	}
}
//===============================================