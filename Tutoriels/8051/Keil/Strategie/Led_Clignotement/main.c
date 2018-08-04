//===============================================
#include "GProcess.h"
#include "GDelay.h"
//===============================================
void main() {
	GProcess().Strategy(0);
	GProcess().Init();
	while(1) { 
		GProcess().Update();
		GDelay().ms(1);
	}		
}
//===============================================