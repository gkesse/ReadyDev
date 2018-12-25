//================================================
#include "GAnimateNoAnimate.h"
//================================================
GAnimateNoAnimate* GAnimateNoAnimate::m_instance = 0;
//================================================
GAnimateNoAnimate::GAnimateNoAnimate() {

}
//================================================
GAnimateNoAnimate::~GAnimateNoAnimate() {
	
}
//================================================
GAnimateNoAnimate* GAnimateNoAnimate::Instance() {
	if(m_instance == 0) {
        m_instance = new GAnimateNoAnimate;
	}
	return m_instance;
}
//================================================
