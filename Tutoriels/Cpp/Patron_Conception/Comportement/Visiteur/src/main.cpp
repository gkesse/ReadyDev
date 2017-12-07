//===============================================
#include "GCar.h"
#include "GVisitor.h"
#include "GPrintVisitor.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GCar> m_car(new GCar);
    shared_ptr<GVisitor> m_printVisitor(new GPrintVisitor);
    m_printVisitor->visit(m_car.get());
}
//===============================================
