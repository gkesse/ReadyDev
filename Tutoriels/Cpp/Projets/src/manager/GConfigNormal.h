//===============================================
#ifndef _GConfigNormal_
#define _GConfigNormal_
//===============================================
#include "GConfig.h"
//===============================================
class GConfigNormal : public GConfig {
private:
    GConfigNormal();

public:
    ~GConfigNormal();
    static GConfigNormal* Instance();
    void setData(const string& key, const string& value);
    string getData(const string& key);
    void show();
    void remove(const string &key);
    void clear();

private:
    static GConfigNormal* m_instance;
    map<string, string> m_dataMap;
};
//===============================================
#endif
//===============================================
