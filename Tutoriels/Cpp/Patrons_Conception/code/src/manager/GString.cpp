//================================================
#include "GString.h"
//================================================
GString* GString::m_instance = 0;
//================================================
GString::GString() {

}
//================================================
GString::~GString() {
	
}
//================================================
GString* GString::Instance() {
	if(m_instance == 0) {
        m_instance = new GString;
	}
	return m_instance;
}
//================================================
vector<string> GString::split(const string& str, const string& sep) {
    vector<string> lDataMap;
    string lData = str;
    size_t lPos = 0;
    string lToken;
    while ((lPos = lData.find(sep)) != string::npos) {
        lToken = lData.substr(0, lPos);
        lDataMap.push_back(lToken);
        lData.erase(0, lPos + sep.length());
    }
    lDataMap.push_back(lData);
    return lDataMap;
}
//================================================
string GString::trimLeft(const string& str, const string& chars) {
    string lTrim(str);
    lTrim.erase(0, lTrim.find_first_not_of(chars));
    return lTrim;
}
//================================================
string GString::trimRight(const string& str, const string& chars) {
    string lTrim(str);
    lTrim.erase(lTrim.find_last_not_of(chars) + 1);
    return lTrim;
}
//================================================
string GString::trim(const string& str, const string& chars) {
    return trimLeft(trimRight(str, chars), chars);
}
//================================================
