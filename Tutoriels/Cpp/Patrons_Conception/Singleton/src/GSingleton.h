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
    
public:
    static GSingleton* Instance();
    void setData(const string& data);
    string getData();
    void showData();
    
private:
    static GSingleton* m_instance;
    string m_data;
};
//===============================================
#endif
//===============================================
