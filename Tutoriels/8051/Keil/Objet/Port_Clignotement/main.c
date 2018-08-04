//===============================================
#include "GPortFlash.h"
#include "GDelay.h"
//===============================================
void main() {
	GPortFlash().Init();
	while(1) { 
		GPortFlash().Update();
		GDelay().ms(1);
	}		
}
//===============================================