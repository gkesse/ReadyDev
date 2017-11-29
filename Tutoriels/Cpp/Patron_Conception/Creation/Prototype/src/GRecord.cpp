//===============================================
#include "GRecord.h"
#include "GRecordCar.h"
#include "GRecordPerson.h"
#include "GConfig.h"
//===============================================
GRecord* GRecord::Instance() {
    string m_record = GConfig::Instance()->getData("Record");
    if(m_record == "Person") {return GRecordPerson::Instance();}
    else if(m_record == "Car") {return GRecordCar::Instance();}
    return 0;
}
//===============================================
