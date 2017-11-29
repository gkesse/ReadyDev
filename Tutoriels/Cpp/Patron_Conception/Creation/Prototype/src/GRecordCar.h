//===============================================
#ifndef _GRecordCar_
#define _GRecordCar_
//===============================================
#include "GRecord.h"
//===============================================
class GRecordCar : public GRecord {
private:
    GRecordCar();

public:
    ~GRecordCar();
    static GRecordCar* Instance();

public:
    GRecord* clone();
    void print();
    void setBrand(const string& brand);
    void setName(const string& name);

private:
    static GRecordCar* m_instance;
    string m_brand;
    string m_name;
};
//===============================================
#endif
//===============================================
