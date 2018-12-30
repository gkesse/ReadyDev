//===============================================
#include "GSetting.h"
#include "GFree.h"
#include "GString.h"
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
    FILE *lFile = fopen(file, "r");
    char lBuffer[100];

    while(fgets(lBuffer, sizeof(lBuffer), lFile) != NULL) {
        char* lTrim = GString()->Trim(lBuffer);
        if(lTrim == 0) {continue;}
        char lFirst = lTrim[0];
        if(lFirst == G_CHAR_COMMENT) {GFree()->Free(lTrim); continue;}
        int lCount;
        char** lSplit = GString_Split(lTrim, "=", &lCount);
        char* lKey = GString()->Trim(lSplit[0]);
        char* lValue = GString()->Trim(lSplit[1]);
        printf("=========%s======%s=======%d==========\n", lKey, lValue, lCount);
        /*string lString(lBuffer);
        lBuffer[lString.length() - 1] = 0;
        istringstream lStream(lBuffer);
        string lKey;

        char lFirstChar = trim(lBuffer)[0];

        if(lFirstChar == G_CHAR_COMMENT) continue;

        if(getline(lStream, lKey, '=')) {
           string lValue;

            if(getline(lStream, lValue)) {
                GConfig::Instance()->setData(trim(lKey), trim(lValue));
                cout << lKey << " = " << lValue << "\n";
            }
        }*/
        GFree()->Free(lTrim);
        GFree()->Free(lKey);
        GFree()->Free(lValue);
        GFree()->Free2(lSplit, lCount);
    }

    fclose(lFile);
}
//===============================================
