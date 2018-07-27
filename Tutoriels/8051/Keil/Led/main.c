//===============================================
#include "GLed.h"
#include "GDelay.h"
#include "GInclude.h"
//===============================================
void main() {
	int* test = (int*)malloc(sizeof(int));
	*test = 10;
	GLed_Init();
	while(1) {
		GLed_Port_Flash();
		GDelay_ms(1);
	}		
}
//===============================================