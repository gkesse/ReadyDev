
//===============================================
#include "GSeos.h"
#include "GPortFlash.h"
//===============================================
void main() {
	GSeos_Init(1);
	GPortFlash_Init();
	GSeos_Start();
    
	while(1) {
		GSeos_Go_To_Sleep();
	}
}
//===============================================