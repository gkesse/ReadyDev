//===============================================
#include "GDelay.h"
#include "GPortDef.h"
//===============================================
#define TIME_MS 127
//===============================================
static bit GDelay_State = FALSE;
static uint GDelay_Time = 0;
//===============================================
void GDelay_ms(uint ms);
//===============================================
static GDelayO m_GDelayO;
static int m_GDelay = FALSE;
//===============================================
GDelayO GDelay_Constructor();
void GDelay_Function(GDelayO* obj);
//===============================================
GDelayO GDelay_Constructor() {
    GDelayO lObj;
    GDelay_Function(&lObj);
    return lObj;
}
//===============================================
void GDelay_Function(GDelayO* obj) {
    obj->ms = GDelay_ms;
}
//===============================================
GDelayO GDelay() {
    if(m_GDelay == FALSE) {
        m_GDelayO = GDelay_Constructor();
        m_GDelay = TRUE;
    }
    return m_GDelayO;
}
//===============================================
void GDelay_ms(uint ms) {
	uint i, j;
    for(i = 0; i < ms; i++) {
        for(j = 0; j < TIME_MS; j++);
	}
}
//===============================================
