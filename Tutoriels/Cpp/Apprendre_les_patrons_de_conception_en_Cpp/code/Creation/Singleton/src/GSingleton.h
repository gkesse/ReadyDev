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
public:
    GSingleton();
    ~GSingleton();
    
public:
    static GSingleton* Instance();
    void setData(const string& data);
    void showData();
    
private:
    static GSingleton* m_instance;
    string m_data;
};
//===============================================
#endif
//===============================================
