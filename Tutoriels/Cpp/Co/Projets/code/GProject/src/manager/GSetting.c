//===============================================
#include "GSetting.h"
#include "GKString.h"
#include "GConfig.h"
#include "GFree.h"
//===============================================
static GSettingO* m_GSettingO = 0;
//===============================================
const char G_CHAR_COMMENT = '#';
//===============================================
GSettingO* GSetting_Constructor();
void GSetting_Init(GSettingO* obj);
void GSetting_Load(const char* file);
//===============================================
GSettingO* GSetting_Constructor() {
	GSettingO* lObj = (GSettingO*)malloc(sizeof(GSettingO));
	GSetting_Init(lObj);
	return lObj;
}
//===============================================
void GSetting_Init(GSettingO* obj) {
	obj->Load = GSetting_Load;
}
//===============================================
GSettingO* GSetting() {
	if(m_GSettingO == 0) {
		m_GSettingO = GSetting_Constructor();
	}
	return m_GSettingO;
}
//===============================================
void GSetting_Load(const char* file) {
	FILE* lFile = fopen(file, "r");
	char lBuffer[100];

	while(fgets(lBuffer, sizeof(lBuffer), lFile) != NULL) {
		char* lTrim = GKString()->Trim(lBuffer);
		if(lTrim == 0) {continue;}
		char lFirst = lTrim[0];
		if(lFirst == G_CHAR_COMMENT) {GFree()->Free(lTrim); continue;}
		int lCount;
		char** lSplit = GKString()->Split(lTrim, "=", &lCount);
		char* lKey = GKString()->Trim(lSplit[0]);
		char* lValue = GKString()->Trim(lSplit[1]);
		GConfig()->Set_Data(lKey, lValue);
		GFree()->Free(lTrim);
		GFree()->Free(lKey);
		GFree()->Free(lValue);
		GFree()->Free2((void**)lSplit, lCount);
	}
	GConfig()->Show();
	printf("\n");
	fclose(lFile);
}
//===============================================
