//================================================
#include "GAircraftAirbus.h"
//================================================
GAircraftAirbus::GAircraftAirbus() {

}
//================================================
GAircraftAirbus::~GAircraftAirbus() {
	
}
//================================================
void GAircraftAirbus::setName(const string &name) {
    m_name = name;
}
//================================================
void GAircraftAirbus::print() const {
    cout << "Je suis un Airbus: " << m_name << "\n";
}
//================================================
