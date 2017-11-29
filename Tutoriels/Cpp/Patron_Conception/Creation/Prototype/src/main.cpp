//===============================================
#include "GRecord.h"
#include "GRecordPerson.h"
#include "GRecordCar.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("Record", "Person");
    GRecordPerson* m_person1 = (GRecordPerson*)GRecord::Instance()->clone();
    m_person1->print();
    GRecordPerson* m_person2 = (GRecordPerson*)GRecord::Instance()->clone();
    m_person2->setName("Francois XAVIER");
    m_person2->setCity("Montpellier");
    m_person2->print();

    GConfig::Instance()->setData("Record", "Car");
    GRecordCar* m_car1 = (GRecordCar*)GRecord::Instance()->clone();
    m_car1->print();
    GRecordCar* m_car2 = (GRecordCar*)GRecord::Instance()->clone();
    m_car2->setBrand("Renault");
    m_car2->setName("Megane");
    m_car2->print();
    return 0;
}
//===============================================
