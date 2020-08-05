//================================================
#include "GSetting.h"
#include "GConfig.h"
//================================================
GSetting* GSetting::m_instance = 0;
//================================================
GSetting::GSetting() {

}
//================================================
GSetting::~GSetting() {

}
//================================================
GSetting* GSetting::Instance() {
    if(m_instance == 0) {
        m_instance = new GSetting;
    }
    return m_instance;
}
//================================================
void GSetting::load(const string& file) {
    FILE *lFile = fopen(file.c_str(), "r");
    char lBuffer[100];

    while(fgets(lBuffer, sizeof(lBuffer), lFile) != NULL) {
        lBuffer[strlen(lBuffer) - 1] = 0;
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
        }
    }

    fclose(lFile);
}
//================================================
string GSetting::trimLeft(const string& str, const string& chars) {
    string lTrim(str);
    lTrim.erase(0, lTrim.find_first_not_of(chars));
    return lTrim;
}
//================================================
string GSetting::trimRight(const string& str, const string& chars) {
    string lTrim(str);
    lTrim.erase(lTrim.find_last_not_of(chars) + 1);
    return lTrim;
}
//================================================
string GSetting::trim(const string& str, const string& chars) {
    return trimLeft(trimRight(str, chars), chars);
}
//================================================
