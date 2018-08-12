//===============================================
#include "GPortFlash.h"
#include "GDelay.h"
//===============================================
void main() {
	GPortFlash_Init();
	while(1) { 
		GPortFlash_Update();
		GDelay_ms(1);
	}		
}
//===============================================