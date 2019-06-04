//===============================================
#include "GSetting.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
static GSettingO* m_GSettingO = 0;
//===============================================
const char G_CHAR_COMMENT = '#';
//===============================================
void GSetting_Load(const char* file);
//===============================================
GSettingO* GSetting_New() {
    GSettingO* lObj = (GSettingO*)malloc(sizeof(GSettingO));
    lObj->m_child = 0;
    lObj->Delete = GSetting_Delete;
    lObj->Load = GSetting_Load;
    return lObj;
}
//===============================================
void GSetting_Delete() {
    GSettingO* lObj = GSetting();
    if(lObj != 0) {
        if(lObj->m_child != 0) {
            free(lObj->m_child);
            lObj->m_child = 0;
        }
        free(lObj);
        lObj = 0;
    }
}
//===============================================
GSettingO* GSetting() {
    if(m_GSettingO == 0) {
        m_GSettingO = GSetting_New();
    }
    return m_GSettingO;
}
//===============================================
void GSetting_Load(const char* file) {
    FILE* lFile = fopen(file, "r");
    char lBuffer[100];

    while(fgets(lBuffer, sizeof(lBuffer), lFile) != NULL) {
       char* lTrim = GString()->Trim(lBuffer);
        if(lTrim == 0) {continue;}
        char lFirst = lTrim[0];
        if(lFirst == G_CHAR_COMMENT) {GString()->Free(lTrim); continue;}
        int lCount;
        char** lSplit = GString()->Split(lTrim, "=", &lCount);
        char* lKey = GString()->Trim(lSplit[0]);
        char* lValue = GString()->Trim(lSplit[1]);
        GConfig()->Set_Data(lKey, lValue);
        GString()->Free(lTrim);
        GString()->Free(lKey);
        GString()->Free(lValue);
        GString()->Free2(lSplit, lCount);
    }
    GConfig()->Show();
    printf("\n");
    fclose(lFile);
}
//===============================================
