//===============================================
#ifndef _GSingleton_
#define _GSingleton_
//===============================================
#include <iostream>
#include <string>
//===============================================
using namespace std;
//===============================================
class GSingleton {
private:
    GSingleton();

public:
    ~GSingleton();
    static GSingleton* Instance();

public:
    void setData(const string& data);
    string getData() const;
    void showData() const;

private:
    static GSingleton* m_instance;
    string m_data;
};
//===============================================
#endif
//===============================================
