//===============================================
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
	g_type_init();
	GOBJ_GCONFIG_CLASS(GConfigI())->Set_Data("PROCESS", "WINDOW");
	printf("%s\n", GOBJ_GCONFIG_CLASS(GConfigI())->Get_Data("PROCESS"));
	return 0;
}
//===============================================
