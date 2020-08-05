//================================================
#include "GSetting.h"
#include "GString.h"
#include "GPrint.h"
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
    ifstream lFile(file);
    string lLine;
    while(getline(lFile, lLine)) {
        lLine = GString::Instance()->trim(lLine);
        if(lLine == "") continue;
        if(lLine[0] == G_CHAR_COMMENT) continue;
        vector<string> lSplit = GString::Instance()->split(lLine, "=");
        string lKey = GString::Instance()->trim(lSplit[0]);
        string lValue = GString::Instance()->trim(lSplit[1]);
        GConfig::Instance()->setData(lKey, lValue);
    }
    lFile.close();
    GConfig::Instance()->showData();
}
//================================================
