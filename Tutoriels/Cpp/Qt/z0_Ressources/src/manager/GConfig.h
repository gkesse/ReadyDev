//================================================
#ifndef _GConfig_
#define _GConfig_
//================================================
#include "GInclude.h"
//================================================
class GConfig {
public:
	GConfig();
	~GConfig();
	
public:
	static GConfig* Instance();
    void setData(const string &key, const string &data);
    string getData(const string& key);
	
private:
	static GConfig* m_instance;
    map<string, string> m_data;
};
//================================================
#endif
//================================================
