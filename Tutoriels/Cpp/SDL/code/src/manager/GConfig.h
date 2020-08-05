//================================================
#ifndef _GConfig_
#define _GConfig_
//================================================
#include <iostream>
//================================================
#include <QMap>
//================================================
using namespace std;
//================================================
class GConfig {
public:
    GConfig();
    ~GConfig();

public:
    static GConfig* Instance();
    void setData(const QString& key, const QString& data);
    QString getData(const QString& key);

private:
    static GConfig* m_instance;
    QMap<QString, QString> m_data;
};
//================================================
#endif
//================================================
