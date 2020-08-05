//===============================================
#ifndef _GPrint_
#define _GPrint_
//===============================================
#include "GInclude.h"
//===============================================
class GPrint {
private:
    GPrint();

public:
    ~GPrint();
    static GPrint* Instance();
    void print(const string& data, const string& name = "");
    void print(const vector<string>& data, const string &name = "");
    void print(const QStringList& data, const string &name = "");
    void print(const QVector<QStringList>& data, const string &name = "");

private:
    static GPrint* m_instance;
};
//===============================================
#endif
//===============================================
