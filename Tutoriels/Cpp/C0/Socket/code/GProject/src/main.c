//===============================================
#include "GSetting.h"
#include "GProcess.h"
//===============================================
int main(int argc, char** argv) {
	GSetting()->Load("data/config/config.txt");
	GProcess()->Run(argc, argv);
	return 0;
}
//===============================================
