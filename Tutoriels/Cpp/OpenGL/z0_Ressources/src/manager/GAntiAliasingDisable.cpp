//================================================
#include "GAntiAliasingDisable.h"
//================================================
GAntiAliasingDisable* GAntiAliasingDisable::m_instance = 0;
//================================================
GAntiAliasingDisable::GAntiAliasingDisable() {

}
//================================================
GAntiAliasingDisable::~GAntiAliasingDisable() {
	
}
//================================================
GAntiAliasingDisable* GAntiAliasingDisable::Instance() {
    if(m_instance == 0) {
        m_instance = new GAntiAliasingDisable;
    }
    return m_instance;
}
//================================================
