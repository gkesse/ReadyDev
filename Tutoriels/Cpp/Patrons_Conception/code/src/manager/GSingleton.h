//================================================
#ifndef _GSingleton_
#define _GSingleton_
//================================================
#include "GInclude.h"
//================================================
class GSingleton {
private:
    GSingleton();

public:
    ~GSingleton();

public:
    static GSingleton* Instance();
    void setData(const string &data);
    void print() const;

private:
    static GSingleton* m_instance;
    string m_data;
};
//================================================
#endif
//================================================
