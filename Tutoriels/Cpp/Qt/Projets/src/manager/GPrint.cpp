//===============================================
#include "GPrint.h"
//===============================================
GPrint* GPrint::m_instance = 0;
//===============================================
GPrint::GPrint() {

}
//===============================================
GPrint::~GPrint() {

}
//===============================================
GPrint* GPrint::Instance() {
    if(m_instance == 0) {
        m_instance = new GPrint;
    }
    return m_instance;
}
//===============================================
void GPrint::print(const string& data, const string &name) {
    if(name != "") cout << name << " :\n";
    cout << "\t" << data << "\n";
}
//===============================================
void GPrint::print(const QStringList& data, const string &name) {
    if(name != "") cout << name << " :\n";
    for(int i = 0; i < data.size(); i++) {
        QString lData = data[i];
        cout << "\t" << lData.toStdString() << "\n";
    }
}
//===============================================
void GPrint::print(const QVector<QStringList> &data, const string &name) {
    if(name != "") cout << name << " :\n";
    foreach (QStringList lDataMap, data) {
        cout << "\t";
        for(int i = 0; i < lDataMap.size(); i++) {
            if(i != 0) cout << " ; ";
            QString lData = lDataMap[i];
            cout << lData.toStdString() ;
        }
        cout << "\n";
    }
}
//===============================================
