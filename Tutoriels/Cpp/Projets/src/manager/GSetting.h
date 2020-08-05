//================================================
#ifndef _GSetting_
#define _GSetting_
//================================================
#include "GInclude.h"
//================================================
class GSetting {
public:
    GSetting();
    ~GSetting();
    static GSetting* Instance();
    void load(const string& file);

private:
    string trimLeft(const string& str, const string& chars = "\t\n\v\f\r ");
    string trimRight(const string& str, const string& chars = "\t\n\v\f\r ");
    string trim(const string& str, const string& chars = "\t\n\v\f\r ");

private:
    static GSetting* m_instance;
    const static char G_CHAR_COMMENT = '#';
};
//================================================
#endif
//================================================
