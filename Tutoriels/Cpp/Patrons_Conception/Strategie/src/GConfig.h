//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include <iostream>
#include <string>
#include <map>
//===============================================
using namespace std;
//===============================================
class GConfig {
private:
    GConfig();
    
public:
    ~GConfig();
    
public:
    static GConfig* Instance();
    void setData(const string& key, const string& value);
    string getData(const string& key);
    
private:
    static GConfig* m_instance;
    map<string, string> m_dataMap;
};
//===============================================
#endif
//===============================================
