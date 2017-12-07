//===============================================
#include "GPrintVisitor.h"
#include "GWheel.h"
#include "GBody.h"
#include "GEngine.h"
#include "GCar.h"
//===============================================
GPrintVisitor::GPrintVisitor() {

}
//===============================================
GPrintVisitor::~GPrintVisitor() {

}
//===============================================
void GPrintVisitor::visit(GWheel* wheel) {
    cout << "PrintVisitor : Wheel | ";
    cout << wheel->getName() << "\n";
}
//===============================================
void GPrintVisitor::visit(GBody* body) {
    cout << "PrintVisitor : Body\n";
}
//===============================================
void GPrintVisitor::visit(GEngine* engine) {
    cout << "PrintVisitor : Engine\n";
}
//===============================================
void GPrintVisitor::visit(GCar* car) {
    cout << "Start PrintVisitor...\n";
    vector<GCarItem*> m_carItemMap = car->getCarItemMap();
    for(int i = 0; i < m_carItemMap.size(); i++) {
        GCarItem* m_carItem = m_carItemMap[i];
        m_carItem->accept(this);
    }
    cout << "End PrintVisitor...\n";
}
//===============================================
