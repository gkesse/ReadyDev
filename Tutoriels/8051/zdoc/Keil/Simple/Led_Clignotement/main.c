//===============================================
#include "GLedFlash.h"
#include "GDelay.h"
//===============================================
void main() {
	GLedFlash_Init();
	while(1) { 
		GLedFlash_Update();
		GDelay_ms(1);
	}		
}
//===============================================