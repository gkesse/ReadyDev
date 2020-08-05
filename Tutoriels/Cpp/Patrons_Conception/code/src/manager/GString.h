//================================================
#ifndef _GString_
#define _GString_
//================================================
#include "GInclude.h"
//================================================
class GString {
public:
    GString();
    ~GString();

public:
    static GString* Instance();
    vector<string> split(const string& str, const string& sep);
    string trimLeft(const string& str, const string& chars = "\t\n\v\f\r ");
    string trimRight(const string& str, const string& chars = "\t\n\v\f\r ");
    string trim(const string& str, const string& chars = "\t\n\v\f\r ");

private:
    static GString* m_instance;
};
//================================================
#endif
//================================================
