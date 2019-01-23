//===============================================
#include "GProcess.h"
#include "GSetting.h"
//===============================================
int main(int argc, char** argv) {
	GSetting()->Load("res/config/config.txt");
	GProcess()->Run(argc, argv);
	GProcess()->Delete(GProcess());
	return 0;
}
//===============================================
