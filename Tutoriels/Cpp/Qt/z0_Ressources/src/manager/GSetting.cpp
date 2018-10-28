//================================================
#include "GSetting.h"
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
        istringstream is_line(lBuffer);
        string key;

        if(getline(is_line, key, '=')) {
           string value;
            if(getline(is_line, value)) {
                cout << "Key: " << trim(key) << " | ";
                cout << "Val: " << trim(value) << "\n";
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
