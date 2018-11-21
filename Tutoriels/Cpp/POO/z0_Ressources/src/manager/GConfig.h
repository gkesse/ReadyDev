//===============================================
#ifndef _GConfig_
#define _GConfig_
//===============================================
#include "GInclude.h"
//===============================================
class GConfig {
private:
    GConfig();

public:
    ~GConfig();
    static GConfig* Instance();
    void setData(const string& key, const string& value);
    string getData(const string& key);
    void showData();

private:
    static GConfig* m_instance;
    map<string, string> m_dataMap;
};
//===============================================
#endif
//===============================================
