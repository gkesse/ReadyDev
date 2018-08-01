//===============================================
#include "GLedFlash.h"
#include "GDelay.h"
//===============================================
void main() {
	GLedFlash().Init();
	while(1) { 
		GLedFlash().Update();
		GDelay().ms(1);
	}		
}
//===============================================