//===============================================
#include "GSetting.h"
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
	GSetting()->Load("res/config/config.txt");
	GProcess()->Run(argc, argv);
	return 0;
}
//===============================================
