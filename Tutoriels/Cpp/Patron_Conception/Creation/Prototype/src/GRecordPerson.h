//===============================================
#ifndef _GRecordPerson_
#define _GRecordPerson_
//===============================================
#include "GRecord.h"
//===============================================
class GRecordPerson : public GRecord {
private:
    GRecordPerson();

public:
    ~GRecordPerson();
    static GRecordPerson* Instance();

public:
    GRecord* clone();
    void print() const;
    void setName(const string& name);
    void setCity(const string& city);

private:
    static GRecordPerson* m_instance;
    string m_name;
    string m_city;
};
//===============================================
#endif
//===============================================
