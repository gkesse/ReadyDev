//===============================================
#include "GWheel.h"
//===============================================
GWheel::GWheel() {

}
//===============================================
GWheel::GWheel(const string& name) {
    m_name = name;
}
//===============================================
GWheel::~GWheel() {

}
//===============================================
void GWheel::setName(const string& name) {
    m_name = name;
}
//===============================================
string GWheel::getName() const {
    return m_name;
}
//===============================================
void GWheel::accept(GVisitor* visitor) {
    visitor->visit(this);
}
//===============================================
